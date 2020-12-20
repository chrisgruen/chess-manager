<?php

namespace ChrisGruen\ChessManager\Domain\Model;


class Result extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * @var int
     */
    protected $classGame;

    /**
     * @var int
     */
    protected $roundGame;

    /**
     * @var string
     */
    protected $saisonGame;

    /**
     * @var int
     */
    protected $homeTeam;

    /**
     * @var int
     */
    protected $awayTeam;

    /**
     * @var float
     */
    protected $homePoint1;

    /**
     * @var float
     */
    protected $awayPoint1;

    /**
     * @var float
     */
    protected $homePoint2;

    /**
     * @var float
     */
    protected $awayPoint2;

    /**
     * @var string
     */
    protected $dateMatch;



    public function __construct()
    {

    }


    /**
     * Get class_game
     *
     * @return int
     */
    public function getClassGame()
    {
        return $this->classGame;
    }

    /**
     * Set class_game
     *
     * @param string $classGame class_game
     */
    public function setClassGame($classGame)
    {
        $this->classGame = $classGame;
    }

    /**
     * Get round
     *
     * @return int
     */
    public function getRoundGame()
    {
        return $this->roundGame;
    }

    /**
     * Set round_game
     *
     * @param string $roundGame round_game
     */
    public function setRoundGame($roundGame)
    {
        $this->roundGame = $roundGame;
    }

    /**
     * Get Saison
     *
     * @return string
     */
    public function getSaisonGame()
    {
        return $this->saisonGame;
    }

    /**
     * Set round_game
     *
     * @param string $saisonGame round_game
     */
    public function setSaisonGame($saisonGame)
    {
        $this->saisonGame = $saisonGame;
    }

    /**
     * Get Home-team
     *
     * @return string
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * Set home_team
     *
     * @param string $homeTeam homeTeam
     */
    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * Get Away-team
     *
     * @return string
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * Set away_team
     *
     * @param string $awayTeam away_team
     */
    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     * Get home_Point1
     *
     * @return float
     */
    public function getHomePoint1()
    {
        return $this->homePoint1;
    }

    /**
     * Set home_point1
     *
     * @param float $homePoint1 home point1
     */
    public function setHomePoint1($homePoint1)
    {
        $this->homePoint1 = $homePoint1;
    }

    /**
     * Get away_Point1
     *
     * @return float
     */
    public function getAwayPoint1()
    {
        return $this->awayPoint1;
    }

    /**
     * Set away_point1
     *
     * @param float $awayPoint1 away point1
     */
    public function setAwayPoint1($awayPoint1)
    {
        $this->awayPoint1 = $awayPoint1;
    }

    /**
     * Get home_Point2
     *
     * @return float
     */
    public function getHomePoint2()
    {
        return $this->homePoint2;
    }

    /**
     * Set home_point2
     *
     * @param float $homePoint2 home point2
     */
    public function setHomePoint2($homePoint2)
    {
        $this->homePoint2 = $homePoint2;
    }

    /**
     * Get away_Point2
     *
     * @return float
     */
    public function getAwayPoint2()
    {
        return $this->awayPoint2;
    }

    /**
     * Set away_point2
     *
     * @param float $awayPoint2 away point2
     */
    public function setAwayPoint2($awayPoint2)
    {
        $this->awayPoint2 = $awayPoint2;
    }

    /**
     * Get date_match
     *
     * @return dateTime
     */
    public function getDateMatch()
    {
        return $this->dateMatch;
    }

    /**
     * Set date_match
     *
     * @param dateTime $dateMatch date_match
     */
    public function setDateMatch($dateMatch)
    {
        $this->dateMatch = $dateMatch;
    }

}
