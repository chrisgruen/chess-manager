<?php

namespace ChrisGruen\ChessManager\Controller;

use ChrisGruen\ChessManager\Domain\Repository\TeamRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ChessManagerController extends ActionController
{
    private $teamRepository;

    /**
     * Inject the team repository
     *
     * @param ChrisGruen\ChessManager\Domain\Repository\TeamRepository $teamRepository
     */
    public function injectTeamRepository(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function listAction()
    {
        $teams = $this->teamRepository->findAll();
        $this->view->assign('teams', $teams);
    }
}