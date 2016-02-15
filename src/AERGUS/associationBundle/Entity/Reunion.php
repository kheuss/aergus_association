<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="Reunion")
     */
    class Reunion
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
        protected $ordreDuJour;

        /**
         * @ORM\Column(type="string")
         */
        protected $pv;

        /**
         * @ORM\Column(type="date")
         */
        protected $dateReunion;

        /**
         * @ORM\ManyToOne(targetEntity="Bureau", inversedBy="reunions")
         * @ORM\JoinColumn(name="Bureau_id", referencedColumnName="id")
         */
        protected $bureau;

    
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
     * Set ordreDuJour
     *
     * @param string $ordreDuJour
     *
     * @return Reunion
     */
    public function setOrdreDuJour($ordreDuJour)
    {
        $this->ordreDuJour = $ordreDuJour;

        return $this;
    }

    /**
     * Get ordreDuJour
     *
     * @return string
     */
    public function getOrdreDuJour()
    {
        return $this->ordreDuJour;
    }

    /**
     * Set pv
     *
     * @param string $pv
     *
     * @return Reunion
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv
     *
     * @return string
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set dateReunion
     *
     * @param \DateTime $dateReunion
     *
     * @return Reunion
     */
    public function setDateReunion($dateReunion)
    {
        $this->dateReunion = $dateReunion;

        return $this;
    }

    /**
     * Get dateReunion
     *
     * @return \DateTime
     */
    public function getDateReunion()
    {
        return $this->dateReunion;
    }

    /**
     * Set bureau
     *
     * @param \AERGUS\associationBundle\Entity\Bureau $bureau
     *
     * @return Reunion
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
}
