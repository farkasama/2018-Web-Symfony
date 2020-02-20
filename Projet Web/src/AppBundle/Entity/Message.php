<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="id_user_src", columns={"id_user_src"}), @ORM\Index(name="id_user_dsc", columns={"id_user_dsc"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_src", type="bigint", nullable=false)
     */
    private $idUserSrc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_dsc", type="bigint", nullable=false)
     */
    private $idUserDsc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=1000, nullable=false)
     */
    private $contenu;



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
     * Set idUserSrc
     *
     * @param integer $idUserSrc
     *
     * @return Message
     */
    public function setIdUserSrc($idUserSrc)
    {
        $this->idUserSrc = $idUserSrc;

        return $this;
    }

    /**
     * Get idUserSrc
     *
     * @return integer
     */
    public function getIdUserSrc()
    {
        return $this->idUserSrc;
    }

    /**
     * Set idUserDsc
     *
     * @param integer $idUserDsc
     *
     * @return Message
     */
    public function setIdUserDsc($idUserDsc)
    {
        $this->idUserDsc = $idUserDsc;

        return $this;
    }

    /**
     * Get idUserDsc
     *
     * @return integer
     */
    public function getIdUserDsc()
    {
        return $this->idUserDsc;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Message
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
