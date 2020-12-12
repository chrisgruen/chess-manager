<?php

namespace ChrisGruen\ChessManager\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class TeamRepository extends Repository
{
    public function findByUid($uid)
    {
        return $this->findByIdentifier($uid);
    }
}