<?php

namespace Cg\ChessManager\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Team extends AbstractEntity
{
    protected $team = '';
    protected $note= '';

    public function __construct(string $team, string $note)
    {
        $this->setTeam($team);
        $this->setNote($note);
    }

    public function setTeam(string $team): void
    {
        $this->team = $team;
    }

    public function getTeam(): string
    {
        return $this->team;
    }

    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    public function getNote(): string
    {
        return $this->note;
    }
}