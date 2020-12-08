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

    public function relationQuery()
    {
        $query = $this->createQuery();
        $result = $query->statement('SELECT * FROM tx_sjroffers_domain_model_offer');
        return $result;
    }
}

