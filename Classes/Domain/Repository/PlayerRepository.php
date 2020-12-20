<?php

namespace ChrisGruen\ChessManager\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class PlayerRepository extends Repository
{
    public function findActivePlayer()
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
            $query->equals('status', 1),
           )
        );
        return $query->execute();
    }

    public function showPlayer()
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
            $query->equals('uid', 1),
           )
        );
        return $query->execute();
    }

    public function findByUid($uid)
    {
        return $this->findByIdentifier($uid);       
    }
}

