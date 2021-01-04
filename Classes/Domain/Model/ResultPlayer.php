<?php

namespace ChrisGruen\ChessManager\Domain\Model;


class ResultPlayer extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * @var int
     */
    protected $scoreReport;
    
    /**
     * @var int
     */
    protected $playerMyteam;
    
    /**
     * @var string
     */
    protected $playerOpponent;
    
    
    /**
     * @var float
     */
    protected $resultMyteam;
    
    /**
     * @var float
     */
    protected $resultOpponent;
    
   
    
        
    /**
     *
     * @return \ChrisGruen\ChessManager\Domain\ModelPlayer
     */
    public function __construct()
    {
        
    }
    
    /**
     * Get score_report
     *
     * @return int
     */
    public function getScoreReport()
    {
        return $this->scoreReport;
    }
    
    /**
     * Set score_report
     *
     * @param string $scoreReport score_report
     */
    public function setScoreReport($scoreReport)
    {
        $this->scoreReport = $scoreReport;
    }
    
    /**
     * Get player_myteam
     *
     * @return int
     */
    public function getPlayerMyteam()
    {
        return $this->playerMyteam;
    }
    
    /**
     * Set player_myteamt
     *
     * @param string $playerMyteam player_myteam
     */
    public function setPlayerMyteam($playerMyteam)
    {
        $this->playerMyteam = $playerMyteam;
    }
    
    
    /**
     * Get player_opponent
     *
     * @return string
     */
    public function getPlayerOpponent()
    {
        return $this->playerOpponent;
    }
    
    /**
     * Set player_opponent
     *
     * @param string $playerOpponent player_opponent
     */
    public function setPlayerOpponent($playerOpponent)
    {
        $this->playerOpponent = $playerOpponent;
    }
    
    /**
     * Get result_myteam
     *
     * @return float
     */
    public function getResultMyteam()
    {
        return $this->resultMyteam;
    }
    
    /**
     * Set result_myteam
     *
     * @param string $resultMyteam result_myteam
     */
    public function setResultMyteam($resultMyteam)
    {
        $this->resultMyteam = $resultMyteam;
    }
    
    /**
     * Get result_opponent
     *
     * @return float
     */
    public function getResultOpponent()
    {
        return $this->resultOpponent;
    }
    
    /**
     * Set result_opponent
     *
     * @param string $resultOpponent result_opponent
     */
    public function setResultOpponent($resultOpponent)
    {
        $this->resultOpponent = $resultOpponent;
    }
       
}
