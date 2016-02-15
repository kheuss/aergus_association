<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="Niveau")
     */
    class Niveau
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(type="string")
         */
        protected $niveau;

        /**
         * @ORM\OneToMany(targetEntity="Membre", mappedBy="niveau")
         */
        protected $membres;

        public function __construct()
        {
            $this->membres = new ArrayCollection();
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
     * Set niveau
     *
     * @param string $niveau
     *
     * @return Niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Add membre
     *
     * @param \AERGUS\associationBundle\Entity\Membre $membre
     *
     * @return Niveau
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
}
