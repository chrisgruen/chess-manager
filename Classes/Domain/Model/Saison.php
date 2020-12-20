<?php

namespace ChrisGruen\ChessManager\Domain\Model;

class Saison extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * @var int
     */
    protected $rang_id;

    /**
     * @var string
     */
    protected $team_rang;

    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $saison;

    /**
     * @var int
     */
    protected $count_player;


    public function __construct()
    {

    }

    /**
     * Get RangId
     *
     * @return int
     */
    public function getRangId()
    {
        return $this->rangId;
    }

    /**
     * Set range_id
     *
     * @param string $rangId range_id
     */
    public function setRangeId($rangId)
    {
        $this->rangId = $rangId;
    }

    /**
     * Get team_rang
     *
     * @return string
     */
    public function getTeamRang()
    {
        return $this->teamRang;
    }

    /**
     * Set team_rang
     *
     * @param int $teamRang team_rang
     */
    public function setTeamRang($teamRang)
    {
        $this->teamRang = $teamRang;
    }


    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set class
     *
     * @param string $class class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Get saison
     *
     * @return saison
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * Set saison
     *
     * @param string $saison saison
     */
    public function setSaison($saison)
    {
        $this->saison = $saison;
    }

    /**
     * Get count_player
     *
     * @return int
     */
    public function getCountPlayer()
    {
        return $this->countPlayer;
    }

    /**
     * Set count_player
     *
     * @param string $countPlayer count_player
     */
    public function setCountPlayer($countPlayer)
    {
        $this->countPlayer = $countPlayer;
    }

}
