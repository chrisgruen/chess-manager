<?php

namespace ChrisGruen\ChessManager\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class SaisonRepository extends Repository
{
    public function findBySaison($saison)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('uid', 1)
            )
        );
        return $query->execute()->getFirst();
    }
}
