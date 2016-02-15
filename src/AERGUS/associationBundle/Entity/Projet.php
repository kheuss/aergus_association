<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="Projet")
     */
    class Projet
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
        protected $nom;

        /**
         *@ORM\OneToMany(targetEntity="Etat", mappedBy="projet")
         */
        protected $etats;

        public function __construct()
        {
            $this->etats = new ArrayCollection();

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
     * @return Projet
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
     * Add etat
     *
     * @param \AERGUS\associationBundle\Entity\Etat $etat
     *
     * @return Projet
     */
    public function addEtat(\AERGUS\associationBundle\Entity\Etat $etat)
    {
        $this->etats[] = $etat;

        return $this;
    }

    /**
     * Remove etat
     *
     * @param \AERGUS\associationBundle\Entity\Etat $etat
     */
    public function removeEtat(\AERGUS\associationBundle\Entity\Etat $etat)
    {
        $this->etats->removeElement($etat);
    }

    /**
     * Get etats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtats()
    {
        return $this->etats;
    }
}
