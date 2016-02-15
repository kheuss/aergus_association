<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="Sortant")
     */
    class Sortant
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(type="integer")
         */
        protected $somme;

        /**
         * @ORM\Column(type="text")
         */
        protected $motif;

        /**
         * @ORM\ManyToOne(targetEntity="Bureau", inversedBy="sorties")
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
     * Set somme
     *
     * @param integer $somme
     *
     * @return Sortant
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Get somme
     *
     * @return integer
     */
    public function getSomme()
    {
        return $this->somme;
    }

    /**
     * Set motif
     *
     * @param string $motif
     *
     * @return Sortant
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set bureau
     *
     * @param \AERGUS\associationBundle\Entity\Bureau $bureau
     *
     * @return Sortant
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
