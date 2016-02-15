<?php

    namespace AERGUS\associationBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="Etat")
     */
    class Etat
    {
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(type="text")
         */
        protected $notification;

        /**
         * @ORM\Column(type="date")
         */
        protected $date;

        /**
         * @ORM\ManyToOne(targetEntity="Projet", inversedBy="etats")
         * @ORM\JoinColumn(name="Projet_id", referencedColumnName="id")
         */
        protected $projet;

    
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
     * Set notification
     *
     * @param string $notification
     *
     * @return Etat
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get notification
     *
     * @return string
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Etat
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set projet
     *
     * @param \AERGUS\associationBundle\Entity\Projet $projet
     *
     * @return Etat
     */
    public function setProjet(\AERGUS\associationBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \AERGUS\associationBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }
}
