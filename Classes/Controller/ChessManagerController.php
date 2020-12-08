<?php

namespace ChrisGruen\ChessManager\Controller;

use ChrisGruen\ChessManager\Domain\Repository\TeamRepository;
use ChrisGruen\ChessManager\Domain\Repository\PlayerRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ChessManagerController extends ActionController
{
    private $teamRepository;
    private $playerRepository;

    /**
     * Inject the team repository
     *
     * @param ChrisGruen\ChessManager\Domain\Repository\TeamRepository $teamRepository
     */
    public function injectTeamRepository(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }
    
    /**
     * Inject the player repository
     *
     * @param ChrisGruen\ChessManager\Domain\Repository\PlayerRepository $playerRepository
     */
    public function injectPlayerRepository(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function indexAction()
    {
        //$allplayers = $this->playerRepository->findAll();
        $activePlayers = $this->playerRepository->findActivePlayer();
        $this->view->assign('players', $activePlayers);
    }

    public function showAction(\ChrisGruen\ChessManager\Domain\Model\Player $playerUid)
    {
	//$player =  $this->playerRepository->showPlayer();
	$player =  $this->playerRepository->findByUid($playerUid);
	$this->view->assign('player', $player);
    }   

	
    public function listAction()
    {
	echo "List";
	exit;
    }      
}