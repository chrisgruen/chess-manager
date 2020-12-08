<?php

namespace ChrisGruen\ChessManager\Controller;

use ChrisGruen\ChessManager\Domain\Repository\ResultRepository;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ChessResultController extends ActionController
{
    private $teamRepository;
    private $playerRepository;

    /**
     * Inject the team repository
     *
     * @param ChrisGruen\ChessManager\Domain\Repository\ResultRepository $resultRepository
     */
    public function injectTeamRepository(ResultRepository $resultRepository)
    {
        $this->resultRepository = $resultRepository;
    }


    public function indexAction()
    {
        //$allplayers = $this->playerRepository->findAll();
        $results = $this->resultRepository->allSorted();
        $this->view->assign('results', $results);
    }
}
