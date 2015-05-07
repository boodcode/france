<?php

namespace Boodcode\ContactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @Gedmo\Uploadable(
 *      allowOverwrite=false, 
 *      filenameGenerator="ALPHANUMERIC",
 *      appendNumber=true,
 *      path="../web/uploads",
 *      allowedTypes="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document",
 *      callback="myCallbackMethod"
 *  )
 */
class Attachment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     * @Gedmo\UploadableFilePath
     * @Assert\File(
     *      maxSize="5000000",
     *      mimeTypes = {"application/pdf", "application/x-pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"},
     *      mimeTypesMessage = "extension de fichier (.doc, .docx et .pdf)"
     *  )
     */
    private $file;

    /**
     * @ORM\Column(type="string", length=255)
     * @Gedmo\UploadableFileName
     */
    private $name;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function getFile()
    {
        return $this->file; 
        return $this;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return File
     */
    public function setName($name)
    {
        $this->name = $name;
 
        return $this;
    }
 
    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function myCallbackMethod(array $info)
    {
        // Do some stuff with the file..

    }


}