<?php

namespace Boodcode\ContactBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Translatable;



/**
 * ContactObjet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Boodcode\ContactBundle\Entity\ContactObjetRepository")
 */
class ContactObjet implements Translatable
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
     * @Gedmo\Translatable
     * @ORM\Column(name="mailObjet", type="string", length=255)
     */
    private $mailObjet;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

   
    /**
     * @Gedmo\Locale
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     */
    private $locale;




    
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
     * Set mailObjet
     *
     * @param string $mailObjet
     * @return ContactObjet
     */
    public function setMailObjet($mailObjet)
    {
        $this->mailObjet = $mailObjet;

        return $this;
    }

    /**
     * Get mailObjet
     *
     * @return string 
     */
    public function getMailObjet()
    {
        return $this->mailObjet;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return ContactObjet
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

    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }

}
