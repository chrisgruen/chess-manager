<?php

namespace ChrisGruen\ChessManager\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class ResultRepository extends Repository
{
    public function allSorted() {
        $query = $this->createQuery();
        $query->setOrderings(array("uid" => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING));
        return $query->execute();
    }

    public function saison_round($aison, $round) {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('saisonGame', $aison),
                $query->equals('roundGame', $round),
            )
        );
        return $query->execute();
    }

    public function relationQuery()
    {
        $query = $this->createQuery();
        $query->statement('SELECT * FROM tx_chessmanager_domain_model_result');
        return $query->execute();;
    }
}

