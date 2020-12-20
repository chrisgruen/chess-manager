<?php

namespace ChrisGruen\ChessManager\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use ChrisGruen\ChessManager\Domain\Repository\teamRepository;

class Team extends AbstractEntity
{
    protected $team = '';
    protected $note= '';

    public function __construct(string $team, string $note)
    {
        $this->setTeam($team);
        $this->setNote($note);
    }

    public function setTeam(string $team)
    {
        $this->team = $team;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function setNote(string $note)
    {
        $this->note = $note;
    }

    public function getNote(): string
    {
        return $this->note;
    }
}