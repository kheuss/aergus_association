<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;
    use Gedmo\Mapping\Annotation as Gedmo;
    use Symfony\Component\HttpFoundation\File\UploadedFile;

    /**
     * File
     * @ORM\Entity()
     * @Gedmo\Uploadable(filenameGenerator="SHA1", allowOverwrite=true)
     */
    class Programme
    {
        /**
         * @var integer
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

        /**
         * @var string
         * @ORM\Column(name="path", type="string")
         * @Gedmo\UploadableFilePath
         */
        private $path;

        /**
         * @Assert\NotBlank()
         */
        private $file;
    
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
         * Set path
         *
         * @param string $path
         *
         * @return Programme
         */
        public function setPath($path)
        {
            $this->path = $path;

            return $this;
        }

        /**
         * Get path
         *
         * @return string
         */
        public function getPath()
        {
            return $this->path;
        }

        public function getFile()
        {
            return $this->file;
        }

        public function setFile(UploadedFile $file = null)
        {
            $this->file = $file;
        }
    }
