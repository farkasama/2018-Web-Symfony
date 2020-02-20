<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="id_ensemble", columns={"id_ensemble"})})
 * @ORM\Entity
 */
class Evaluation
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
     * @ORM\Column(name="id_ensemble", type="bigint", nullable=false)
     */
    private $idEnsemble;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_point", type="bigint", nullable=false)
     */
    private $totalPoint;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_vote", type="bigint", nullable=false)
     */
    private $nbVote;



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
     * Set idEnsemble
     *
     * @param integer $idEnsemble
     *
     * @return Evaluation
     */
    public function setIdEnsemble($idEnsemble)
    {
        $this->idEnsemble = $idEnsemble;

        return $this;
    }

    /**
     * Get idEnsemble
     *
     * @return integer
     */
    public function getIdEnsemble()
    {
        return $this->idEnsemble;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Evaluation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set totalPoint
     *
     * @param integer $totalPoint
     *
     * @return Evaluation
     */
    public function setTotalPoint($totalPoint)
    {
        $this->totalPoint = $totalPoint;

        return $this;
    }

    /**
     * Get totalPoint
     *
     * @return integer
     */
    public function getTotalPoint()
    {
        return $this->totalPoint;
    }

    /**
     * Set nbVote
     *
     * @param integer $nbVote
     *
     * @return Evaluation
     */
    public function setNbVote($nbVote)
    {
        $this->nbVote = $nbVote;

        return $this;
    }

    /**
     * Get nbVote
     *
     * @return integer
     */
    public function getNbVote()
    {
        return $this->nbVote;
    }
}
