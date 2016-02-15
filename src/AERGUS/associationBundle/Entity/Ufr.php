<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    use Gedmo\Mapping\Annotation as Gedmo;
    use Symfony\Component\Validator\Constraints as Assert;

    /**
     * @ORM\Entity
     * @ORM\Table(name="UFR")
     */
    class Ufr
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(type="string")
         * @Assert\NotBlank(message="Ce champ doit etre renseigné")
         */
        protected $libelle;

        /**
         * @ORM\Column(type="string")
         * @Assert\NotBlank(message="Ce champ doit etre renseigné")
         */
        protected $NomComplet;

        /**
         * @ORM\OneToMany(targetEntity="Section", mappedBy="ufr", cascade={"remove"})
         */
        protected $sections;

        public function __construct()
        {
            $this->sections = new ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Ufr
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add section
     *
     * @param \AERGUS\associationBundle\Entity\Section $section
     *
     * @return Ufr
     */
    public function addSection(\AERGUS\associationBundle\Entity\Section $section)
    {
        $this->sections[] = $section;

        return $this;
    }

    /**
     * Remove section
     *
     * @param \AERGUS\associationBundle\Entity\Section $section
     */
    public function removeSection(\AERGUS\associationBundle\Entity\Section $section)
    {
        $this->sections->removeElement($section);
    }

    /**
     * Get sections
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     *
     * @return Ufr
     */
    public function setNomComplet($nomComplet)
    {
        $this->NomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->NomComplet;
    }
}
