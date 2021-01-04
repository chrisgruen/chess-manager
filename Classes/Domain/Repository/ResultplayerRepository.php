<?php

namespace ChrisGruen\ChessManager\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ResultplayerRepository extends Repository
{
    public function findByUid($uid)
    {
        return $this->findByIdentifier($uid);
    }
    
    /**
     * get active per round/saison/class
     * Data from Table "tx_chessmanager_domain_model_player, tx_chessmanager_domain_model_resultplayer, tx_chessmanager_domain_model_result"
     * @return array
     */
    public function getPlayers(){
        
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_chessmanager_domain_model_result');
        $sql = "SELECT uid, name from tx_chessmanager_domain_model_player order by sort";
        
        $players = $connection->executeQuery($sql)->fetchAll();
        return $players;
    }
    
    /**
     * prepare player ranglist per round/saison/class
     * Data from Table "tx_chessmanager_domain_model_player, tx_chessmanager_domain_model_resultplayer, tx_chessmanager_domain_model_result"
     * @return array
     */
    public function scorePlayer($name_uid, $round_game, $saison_game, $class_game){
        
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_chessmanager_domain_model_result');
        $sql = "SELECT pl.uid, name, round_game, result_myteam, saison_game from tx_chessmanager_domain_model_player pl
                LEFT JOIN tx_chessmanager_domain_model_resultplayer rp on pl.uid = rp.player_myteam
                INNER JOIN tx_chessmanager_domain_model_result rt on rp.score_report = rt.uid
                WHERE (result_myteam = 0 or result_myteam = 1 or result_myteam = 0.5)
                and round_game <= '".$round_game."' and player_myteam = '".$name_uid."' and rt.saison_game = '".$saison_game."'
                and rp.player_opponent != 'unbesetzt'
                and rt.class_game = '".$class_game."'";
        
        $scoreplayer = $connection->executeQuery($sql)->fetchAll();
        return $scoreplayer;
    }
}
