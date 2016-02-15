<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;

    /**
     * Bureau
     * @ORM\Entity
     * @ORM\Table(name="Bureau")
     */
    class Bureau
    {
        /**
         * @var integer
         * @ORM\Column(type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(type="string")
         */
        protected $nom;

         /**
         * @ORM\OneToOne(targetEntity="Programme")
         */
        protected $programme;

        /**
         * @ORM\OneToMany(targetEntity="Membre", mappedBy="bureau")
         */
        protected $membres;

        /**
         * @ORM\OneToMany(targetEntity="Sortant", mappedBy="bureau")
         */
        protected $sorties;

        /**
         * @ORM\OneToMany(targetEntity="Entrant", mappedBy="bureau")
         */
        protected $entrees;

        /**
         * @ORM\OneToMany(targetEntity="Reunion", mappedBy="bureau")
         */
        protected $reunions;

        /**
         * @ORM\ManyToMany(targetEntity="Projet", cascade={"persist"})
        */
        private $projets; 

        public function __construct()
        {
            $this->membres = new ArrayCollection();
            $this->sorties = new ArrayCollection();
            $this->entrees = new ArrayCollection();
            $this->reunions = new ArrayCollection();
            $this->projets = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Bureau
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
     * Set programme
     *
     * @param \AERGUS\associationBundle\Entity\Programme $programme
     *
     * @return Bureau
     */
    public function setProgramme(\AERGUS\associationBundle\Entity\Programme $programme = null)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return \AERGUS\associationBundle\Entity\Programme
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Add membre
     *
     * @param \AERGUS\associationBundle\Entity\Membre $membre
     *
     * @return Bureau
     */
    public function addMembre(\AERGUS\associationBundle\Entity\Membre $membre)
    {
        $this->membres[] = $membre;

        return $this;
    }

    /**
     * Remove membre
     *
     * @param \AERGUS\associationBundle\Entity\Membre $membre
     */
    public function removeMembre(\AERGUS\associationBundle\Entity\Membre $membre)
    {
        $this->membres->removeElement($membre);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembres()
    {
        return $this->membres;
    }

    /**
     * Add sorty
     *
     * @param \AERGUS\associationBundle\Entity\Sortant $sorty
     *
     * @return Bureau
     */
    public function addSorty(\AERGUS\associationBundle\Entity\Sortant $sorty)
    {
        $this->sorties[] = $sorty;

        return $this;
    }

    /**
     * Remove sorty
     *
     * @param \AERGUS\associationBundle\Entity\Sortant $sorty
     */
    public function removeSorty(\AERGUS\associationBundle\Entity\Sortant $sorty)
    {
        $this->sorties->removeElement($sorty);
    }

    /**
     * Get sorties
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSorties()
    {
        return $this->sorties;
    }

    /**
     * Add entree
     *
     * @param \AERGUS\associationBundle\Entity\Entrant $entree
     *
     * @return Bureau
     */
    public function addEntree(\AERGUS\associationBundle\Entity\Entrant $entree)
    {
        $this->entrees[] = $entree;

        return $this;
    }

    /**
     * Remove entree
     *
     * @param \AERGUS\associationBundle\Entity\Entrant $entree
     */
    public function removeEntree(\AERGUS\associationBundle\Entity\Entrant $entree)
    {
        $this->entrees->removeElement($entree);
    }

    /**
     * Get entrees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntrees()
    {
        return $this->entrees;
    }

    /**
     * Add reunion
     *
     * @param \AERGUS\associationBundle\Entity\Reunion $reunion
     *
     * @return Bureau
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

    /**
     * Add projet
     *
     * @param \AERGUS\associationBundle\Entity\Projet $projet
     *
     * @return Bureau
     */
    public function addProjet(\AERGUS\associationBundle\Entity\Projet $projet)
    {
        $this->projets[] = $projet;

        return $this;
    }

    /**
     * Remove projet
     *
     * @param \AERGUS\associationBundle\Entity\Projet $projet
     */
    public function removeProjet(\AERGUS\associationBundle\Entity\Projet $projet)
    {
        $this->projets->removeElement($projet);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjets()
    {
        return $this->projets;
    }
}
