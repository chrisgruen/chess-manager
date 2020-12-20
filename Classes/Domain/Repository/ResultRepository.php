<?php

namespace ChrisGruen\ChessManager\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ResultRepository extends Repository
{
    public function allSorted() {
        $query = $this->createQuery();
        $query->setOrderings(array("uid" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING));
        return $query->execute();
    }

    public function saisonRound($saison, $round, $saison_class_id) {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('saisonGame', $saison),
                $query->equals('roundGame', $round),
                $query->equals('classGame', $saison_class_id)
            )
        );
        return $query->execute();
    }

    public function maxRoundSaison($saison)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('saisonGame', $saison),
                )
            );
        $query->setOrderings(array("uid" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING));
        return $query->execute()->getFirst();
    }
        
    /**
    * prepare saison for current 
    * Data from Table "tx_chessmanager_domain_model_saison"
    * @return array
    */
    public function getSaison($saison) {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_chessmanager_domain_model_saison');
        $saisons = $queryBuilder
        ->select('tx_chessmanager_domain_model_saison.rang_id', 'tx_chessmanager_domain_model_saison.class', 'tx_chessmanager_domain_model_saison.count_player')
        ->from('tx_chessmanager_domain_model_saison')
        ->where(
            $queryBuilder->expr()->eq('tx_chessmanager_domain_model_saison.team_rang', $queryBuilder->createNamedParameter('Romonta Amsdorf I')),
            $queryBuilder->expr()->eq('tx_chessmanager_domain_model_saison.saison', $queryBuilder->createNamedParameter($saison))
            )
            ->execute()
            ->fetchAll();
            
            return  $saisons;
    }

    /**
     * prepare teams per saison
     * Data from Table "tx_chessmanager_domain_model_saison"
     * @return array
     */
    public function getTeamsSaison($class_game, $saison_game)
    {
        //$queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_chessmanager_domain_model_saison');
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_chessmanager_domain_model_saison');
        $sql = "SELECT  t.uid, t.team  FROM tx_chessmanager_domain_model_result re
                LEFT JOIN tx_chessmanager_domain_model_team t on t.uid = re.home_team or t.uid = re.away_team
                LEFT JOIN tx_chessmanager_domain_model_saison sk on sk.uid = re.class_game
                WHERE re.class_game = '".$class_game."' and re.saison_game = '".$saison_game."' 
                GROUP BY t.uid";
        
        $teams = $connection->executeQuery($sql)->fetchAll();    
        return $teams;
    }
    
    /**
     * get point total until round
     * Data from Table "tx_chessmanager_domain_model_result"
     * @return array
     */  
    public function getPoints($saison_game, $round_game, $team)
    {
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_chessmanager_domain_model_result');
        $sql = "SELECT count_player,
				if(rs.home_team= '".$team."',home_point1, if(rs.away_team='".$team."', away_point1, NULL)) as points,
        		if(rs.home_team= '".$team."',home_point2, if(rs.away_team='".$team."', away_point2, NULL)) as bpoints
        		FROM tx_chessmanager_domain_model_result rs
   				LEFT join tx_chessmanager_domain_model_team ht on ht.uid = rs.home_team
				LEFT join tx_chessmanager_domain_model_team at on at.uid = rs.away_team
				WHERE saison_game = '".$saison_game."'
				AND round_game = '".$round_game."'
				AND (rs.home_team = '".$team."' or rs.away_team = '".$team."')
				AND not (rs.away_point1 = 0 and rs.home_point1 = 0)
                LIMIT 1;";
        
        $points = $connection->executeQuery($sql)->fetch();
        return $points;
    }
}

