<?php

namespace Boodcode\ContactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Validations;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Contact
 *
 * @ORM\Table(name="Contact")
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="civ", type="smallint", nullable=false)
     */
    private $civ;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Assert\Length(min=2, minMessage="Le nom doit faire au moins 2 caractères")
     * @Assert\NotBlank(message="Le nom doit être rempli")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     * @Assert\Length(min=2, minMessage="Le nom doit faire au moins 2 caractères")
     * @Assert\NotBlank(message="Le prénom doit être rempli")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable=false)
     * @Assert\Regex(
     *     pattern="/^[0-9]{5,5}$/",
     *     match=true,
     *     message="le code postal n'est pas valide"
     * )
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var tel
     *
     * @ORM\Column(name="tel", type="string", length=32, nullable=true)
     */
    private $tel;

    /**
     * @var mail
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=false)
     * @Assert\Email(message = "'{{ value }}' n'est pas un mail valide.", checkMX = true, checkHost = true)
     * @Assert\NotBlank(message="Merci de remplir votre mail")
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=2, nullable=false)
     */
    private $pays;

    
    /**
     * @ORM\ManyToOne(targetEntity="ContactObjet")
     * @ORM\JoinColumn(name="objet_id", referencedColumnName="id", nullable=true)
     */
    private $contactObjet;


    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     * @Assert\NotBlank(message="Merci de laisser un message")
     */
    private $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=true)
     */
    private $newsletter;


    /**
    * @var attachment
    * @ORM\OneToOne(targetEntity="Attachment", cascade={"persist"})
    * @ORM\JoinColumn(name="attachment_id", referencedColumnName="id", nullable=true)
    */
    private $attachment;



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
     * Set civ
     *
     * @param integer $civ
     * @return Contact
     */
    public function setCiv($civ)
    {
        $this->civ = $civ;

        return $this;
    }

    /**
     * Get civ
     *
     * @return integer 
     */
    public function getCiv()
    {
        return $this->civ;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Contact
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Contact
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Contact
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Contact
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Contact
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

   

    /**
     * Set message
     *
     * @param string $message
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set contactObjet
     *
     * @param integer $contactObjet
     */
    public function setContactObjet(ContactObjet $contactObjet)
    {
        $this->contactObjet = $contactObjet;

        return $this;
    }

    /**
     * Get contactObjet
     *
     * @return integer 
     */
    public function getContactObjet()
    {
        return $this->contactObjet;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     * @return Contact
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean 
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Contact
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Contact
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Contact
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

     /**
     * Set attachment
     *
     * @param string $attachment
     * @return Attachment
     */
    public function setAttachment(Attachment $attachment = null)
    {
        $this->attachment = $attachment;
    }

    /**
     * Get attachment
     *
     * @return string 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }
}
