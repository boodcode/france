<?php

namespace Boodcode\FranceBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * HomepageImage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Boodcode\FranceBundle\Entity\HomepageImageRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class HomepageImage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
    
    /**
    * @Assert\File(maxSize="500k")
    */
    private $thumb;


    // On ajoute cet attribut pour y stocker le nom du fichier temporairement
      private $tempThumbname;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set url
     *
     * @param string $url
     * @return HomepageImage
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return HomepageImage
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }


      // On modifie le setter de Thumb, pour prendre en compte l'upload d'un fichier lorsqu'il en existe déjà un autre
      public function setThumb(UploadedFile $thumb)
      {
        $this->thumb = $thumb;

        // On vérifie si on avait déjà un fichier pour cette entité
        if (null !== $this->url) {
          // On sauvegarde l'extension du fichier pour le supprimer plus tard
          $this->tempThumbname = $this->url;

          // On réinitialise les valeurs des attributs url et alt
          $this->url = null;
          $this->alt = null;
        }
      }
      public function getThumb()
      {
        return $this->thumb;
      }

      /**
       * @ORM\PrePersist()
       * @ORM\PreUpdate()
       */
      public function preUpload()
      {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->thumb) {
          return;
        }

        // Le nom du fichier est son id, on doit juste stocker également son extension
        // Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url »
        $this->url = $this->thumb->guessExtension();

        // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
        $this->alt = $this->thumb->getClientOriginalName();
      }

      /**
       * @ORM\PostPersist()
       * @ORM\PostUpdate()
       */
      public function upload()
      {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->thumb) {
          return;
        }

        // Si on avait un ancien fichier, on le supprime
        if (null !== $this->tempThumbname) {
          $oldThumb = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempThumbname;
          if (file_exists($oldThumb)) {
            unlink($oldThumb);
          }
        }

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->thumb->move(
          $this->getUploadRootDir(), // Le répertoire de destination
          $this->id.'.'.$this->url   // Le nom du fichier à créer, ici « id.extension »
        );
      }

      /**
       * @ORM\PreRemove()
       */
      public function preRemoveUpload()
      {
        // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempThumbname = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
      }

      /**
       * @ORM\PostRemove()
       */
      public function removeUpload()
      {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (thumb_exists($this->tempThumbname)) {
          // On supprime le fichier
          unlink($this->tempThumbname);
        }
      }

      public function getUploadDir()
      {
        // On retourne le chemin relatif vers l'image pour un navigateur
        return 'images/works';
      }

      protected function getUploadRootDir()
      {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/bundles/BoodcodeFranceBundle/'.$this->getUploadDir();
      }


       public function getWebPath()
      {
        return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
      }
  }
