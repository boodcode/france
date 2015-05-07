<?php

namespace Boodcode\FranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
// Ajoutez ce use pour le contexte
use Symfony\Component\Validator\Context\ExecutionContextInterface;
// On rajoute ce use pour la contrainte : Entité unique (se définit sur la classe)
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Work
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Boodcode\FranceBundle\Entity\WorkRepository")
 * @ORM\HasLifecycleCallbacks()
 * /////@UniqueEntity(fields="titre", message="Un travail existe déjà avec ce titre.")
 */
class Work
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
    * @Gedmo\Slug(fields={"titre"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text")
     */
    private $details;

   
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="publication", type="boolean")
    */
    private $publication;

    /**
    * @var integer
    *
    * @ORM\Column(name="ordre", type="integer")
    */
    private $ordre;

    /**
    * @var integer
    *
    * @ORM\Column(name="home_width", type="integer")
    */
    private $home_width;

    /**
    * @var integer
    *
    * @ORM\Column(name="home_height", type="integer")
    */
    private $home_height;


    /**
    * @ORM\OneToMany(targetEntity="Boodcode\FranceBundle\Entity\Image", mappedBy="work", cascade={"persist", "remove"})
    * @ORM\JoinColumn(nullable = false)
    */
    private $image;





    public function __construct()
    {
       // $this->image = new ArrayCollection();
    }

    /**
    * @Assert\Callback
    */
    public function isDetailsValid(ExecutionContextInterface $context)
    {
        $forbiddenWords = array('échec', 'abandon');

        // On vérifie que le contenu ne contient pas l'un des mots
        if (preg_match('#'.implode('|', $forbiddenWords).'#', $this->getDetails())) {
          // La règle est violée, on définit l'erreur
          $context
            ->buildViolation('Contenu invalide car il contient un mot interdit.') // message
            ->atPath('details')                                                   // attribut de l'objet qui est violé
            ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
          ;
        }
    }

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
     * Set titre
     *
     * @param string $titre
     * @return Work
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Work
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Work
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }




    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Work
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Work
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }


    


    /**
     * Add image
     *
     * @param \Boodcode\FranceBundle\Entity\Image $image
     * @return Work
     */
    public function addImage(\Boodcode\FranceBundle\Entity\Image $image)
    {
        $this->image[] = $image;
        $image->setWork($this);
        return $this;
    }

    /**
     * Remove image
     *
     * @param \Boodcode\FranceBundle\Entity\Image $image
     */
    public function removeImage(\Boodcode\FranceBundle\Entity\Image $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * Set ordre
     *
     * @param \integer $ordre
     * @return Work
     */
    public function setOrdre( $ordre)
    {
        $this->ordre = $ordre;
        return $this;
    }

    /**
     * Get ordre
     *
     * @return \integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set home_width
     *
     * @param integer $homeWidth
     * @return Work
     */
    public function setHomeWidth($homeWidth)
    {
        $this->home_width = $homeWidth;

        return $this;
    }

    /**
     * Get home_width
     *
     * @return integer 
     */
    public function getHomeWidth()
    {
        return $this->home_width;
    }

    /**
     * Set home_height
     *
     * @param integer $homeHeight
     * @return Work
     */
    public function setHomeHeight($homeHeight)
    {
        $this->home_height = $homeHeight;

        return $this;
    }

    /**
     * Get home_height
     *
     * @return integer 
     */
    public function getHomeHeight()
    {
        return $this->home_height;
    }

}
