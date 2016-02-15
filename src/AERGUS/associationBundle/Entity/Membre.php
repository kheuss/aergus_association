<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity(repositoryClass="AERGUS\associationBundle\Entity\MembreRepository")
     * @ORM\Table(name="Membre")
     */
    class Membre
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="string")
         */
        protected $id;

        /**
         * @ORM\Column(type="integer")
         */
        protected $numeroDeChambre;

        /**
         * @ORM\ManyToOne(targetEntity="Ressortissants", inversedBy="membres")
         * @ORM\JoinColumn(name="ressortissant_id", referencedColumnName="id")
         */
        protected $ressortissant;

        /**
         * @ORM\ManyToOne(targetEntity="Block", inversedBy="membres")
         * @ORM\JoinColumn(name="block_id", referencedColumnName="id")
         */
        protected $block;

        /**
         * @ORM\ManyToOne(targetEntity="Niveau", inversedBy="membres")
         * @ORM\JoinColumn(name="niveau_id", referencedColumnName="id")
         */
        protected $niveau;

        /**
         * @ORM\ManyToOne(targetEntity="Section", inversedBy="membres")
         * @ORM\JoinColumn(name="section_id", referencedColumnName="id")
         */
        protected $section;

        /**
         * @ORM\ManyToOne(targetEntity="Village", inversedBy="membres")
         * @ORM\JoinColumn(name="village_id", referencedColumnName="id")
         */
        protected $village;

        /**
         * @ORM\ManyToOne(targetEntity="Bureau", inversedBy="membres")
         * @ORM\JoinColumn(name="Bureau_id", referencedColumnName="id")
         */
        protected $bureau;

        /**
         * @ORM\ManyToOne(targetEntity="Fonction", inversedBy="membres")
         * @ORM\JoinColumn(name="fonction_id", referencedColumnName="id")
         */
        protected $fonction;

        /**
         * @ORM\OneToOne(targetEntity="CarteMembre", cascade={"persist"})
        */
        private $carte; 

        /**
         * @ORM\ManyToMany(targetEntity="Reunion", cascade={"persist"})
        */
        private $reunions; 

        public function __construct()
        {
            $this->reunions = new ArrayCollection();
        }


    /**
     * Set id
     *
     * @param string $id
     *
     * @return Membre
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeroDeChambre
     *
     * @param integer $numeroDeChambre
     *
     * @return Membre
     */
    public function setNumeroDeChambre($numeroDeChambre)
    {
        $this->numeroDeChambre = $numeroDeChambre;

        return $this;
    }

    /**
     * Get numeroDeChambre
     *
     * @return integer
     */
    public function getNumeroDeChambre()
    {
        return $this->numeroDeChambre;
    }

    /**
     * Set ressortissant
     *
     * @param \AERGUS\associationBundle\Entity\Ressortissants $ressortissant
     *
     * @return Membre
     */
    public function setRessortissant(\AERGUS\associationBundle\Entity\Ressortissants $ressortissant = null)
    {
        $this->ressortissant = $ressortissant;

        return $this;
    }

    /**
     * Get ressortissant
     *
     * @return \AERGUS\associationBundle\Entity\Ressortissants
     */
    public function getRessortissant()
    {
        return $this->ressortissant;
    }

    /**
     * Set block
     *
     * @param \AERGUS\associationBundle\Entity\Block $block
     *
     * @return Membre
     */
    public function setBlock(\AERGUS\associationBundle\Entity\Block $block = null)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return \AERGUS\associationBundle\Entity\Block
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set niveau
     *
     * @param \AERGUS\associationBundle\Entity\Niveau $niveau
     *
     * @return Membre
     */
    public function setNiveau(\AERGUS\associationBundle\Entity\Niveau $niveau = null)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return \AERGUS\associationBundle\Entity\Niveau
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set section
     *
     * @param \AERGUS\associationBundle\Entity\Section $section
     *
     * @return Membre
     */
    public function setSection(\AERGUS\associationBundle\Entity\Section $section = null)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return \AERGUS\associationBundle\Entity\Section
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set village
     *
     * @param \AERGUS\associationBundle\Entity\Village $village
     *
     * @return Membre
     */
    public function setVillage(\AERGUS\associationBundle\Entity\Village $village = null)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village
     *
     * @return \AERGUS\associationBundle\Entity\Village
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set bureau
     *
     * @param \AERGUS\associationBundle\Entity\Bureau $bureau
     *
     * @return Membre
     */
    public function setBureau(\AERGUS\associationBundle\Entity\Bureau $bureau = null)
    {
        $this->bureau = $bureau;

        return $this;
    }

    /**
     * Get bureau
     *
     * @return \AERGUS\associationBundle\Entity\Bureau
     */
    public function getBureau()
    {
        return $this->bureau;
    }

    /**
     * Set fonction
     *
     * @param \AERGUS\associationBundle\Entity\Fonction $fonction
     *
     * @return Membre
     */
    public function setFonction(\AERGUS\associationBundle\Entity\Fonction $fonction = null)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return \AERGUS\associationBundle\Entity\Fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set carte
     *
     * @param \AERGUS\associationBundle\Entity\CarteMembre $carte
     *
     * @return Membre
     */
    public function setCarte(\AERGUS\associationBundle\Entity\CarteMembre $carte = null)
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * Get carte
     *
     * @return \AERGUS\associationBundle\Entity\CarteMembre
     */
    public function getCarte()
    {
        return $this->carte;
    }

    /**
     * Add reunion
     *
     * @param \AERGUS\associationBundle\Entity\Reunion $reunion
     *
     * @return Membre
     */
    public function addReunion(\AERGUS\associationBundle\Entity\Reunion $reunion)
    {
        $this->reunions[] = $reunion;

        return $this;
    }

    /**
     * Remove reunion
     *
     * @param \AERGUS\associationBundle\Entity\Reunion $reunion
     */
    public function removeReunion(\AERGUS\associationBundle\Entity\Reunion $reunion)
    {
        $this->reunions->removeElement($reunion);
    }

    /**
     * Get reunions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReunions()
    {
        return $this->reunions;
    }
}
