<?php

namespace ChrisGruen\ChessManager\Controller;

use ChrisGruen\ChessManager\Domain\Repository\ResultRepository;
use ChrisGruen\ChessManager\Domain\Repository\SaisonRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ChessResultController extends ActionController
{
    private $resultRepository;

    /**
     * Inject the result repository
     *
     * @param ChrisGruen\ChessManager\Domain\Repository\ResultRepository $resultRepository
     */
    public function injectResultRepository(ResultRepository $resultRepository)
    {
        $this->resultRepository = $resultRepository;
    }

    public function indexAction()
    {
        $show_saison = '';
        $maxround = 0;
        $arguments = $this->request->getArguments();

        if($this->request->hasArgument('year')){
            $date_year  = $this->request->getArgument('year');
        } else {
            $date_year = date('Y');
        }

        /* denpend $date_month for show saison (halfyear) */
        $date_month = date('n');
        //$date_month = 5;

        if($date_month > 7) {
            $year_saison_start =  $date_year;
            $show_saison = $year_saison_start.'/'.($year_saison_start + 1);
            $year_saison_min = $year_saison_start-1;
            $year_saison_plus = $year_saison_start+1;
        } else {
            $year_saison_start = $date_year-1;
            $show_saison = $year_saison_start.'/'.($year_saison_start + 1);
            $year_saison_min = $year_saison_start-1;
            $year_saison_plus = $year_saison_start+2;
        }

        $saison = strval($show_saison);
        $max_round = $this->resultRepository->maxRoundSaison($saison);

        /* Data from Saison-table */
        $get_saison_team = $this->resultRepository->getSaison($saison);
        $saison_class_id  = $get_saison_team[0]['rang_id'];
        $saison_leage  = $get_saison_team[0]['class'];
        $count_player = $get_saison_team[0]['count_player'];

        if($max_round !== Null) {
            $maxround = $max_round->getRoundGame();
        }

        if($this->request->hasArgument('round')) {
            $round = $this->request->getArgument('round');
        } else {
            $round = $maxround;
        }

        /* Result data */
        $results = $this->resultRepository->saisonRound($saison, $round, $saison_class_id);
        
        /* prepare table ranglist teams */
        $teams_rang = $this->resultRepository->getTeamsSaison($saison_class_id,$saison);
        $ranglist = $this->getTabelleRang($saison, $teams_rang, $round, $count_player);
        
        $this->view->assign('results', $results);
        $this->view->assign('show_saison', $show_saison);
        $this->view->assign('year_saison_start', $year_saison_start);
        $this->view->assign('year_saison_min', $year_saison_min);
        $this->view->assign('year_saison_plus', $year_saison_plus);
        $this->view->assign('maxround', $maxround);
        $this->view->assign('rounds', $this->prepareRounds($maxround));
        $this->view->assign('round', $round );
        $this->view->assign('saison_leage', $saison_leage );
        $this->view->assign('ranglist', $ranglist );
    }

    public function listAction()
    {
        $round = 0;
        if($this->request->hasArgument('round')){
            $round = $this->request->getArgument('round');
        }

        $this->forward('index', 'ChessResult', $this->request->getControllerExtensionName(), $this->request->getArguments());
    }


/*############ HELPERFUNTIONS #########################################################################################*/

    /**
     * prepare rounds for select box
     *
     * @return array
     */
    public function prepareRounds($maxRound) {
        $rounds = [];
        for($i=1; $i <= $maxRound; $i++) {
            $round = new \stdClass();
            $round->key = $i;
            $round->value = "Runde: ".$i;
            $rounds[] = $round;
        }
        return $rounds;
    }

    /**
     * prepare ranglist for currend stand
     *
     * @return array
     */
    public function getTabelleRang($saison, $teams_rang, $maxround, $count_player) {
        $win_lost_default = $count_player/2;
        $score_plus = 0;
        $score_min = 0;
        $score_plus_total = 0;
        $score_min_total = 0;
        $points1_total = 0;
        $points2_total = 0;
 
        foreach($teams_rang as $team) {
            $team_id = $team['uid'];
            for ($rnd=1; $rnd <= $maxround; $rnd++){                
                    $team_points = $this->resultRepository->getPoints($saison,$rnd,$team_id);
                if(isset($team_points['count_player'])) {
                    $win_lost = $team_points['count_player']/2;
                } else {
                    $win_lost = $win_lost_default;
                }
                
                if(count($team_points) > 0) {
                    if($team_points > -1) {
                        if($team_points['points'] > $win_lost){
                            $score_plus = 2;
                            $score_min = 0;
                        } else if ($team_points['points'] == $win_lost){
                            $score_plus = 1;
                            $score_min = 1;
                        } else {
                            $score_plus = 0;
                            $score_min = 2;
                        }
                    } else {
                        $score_plus = 0;
                        $score_min = 0;
                    }
                    
                    $score_plus_total = intval($score_plus_total +  $score_plus);
                    $score_min_total = intval($score_min_total +  $score_min);
                    $points1_total = $points1_total + $team_points['points'];
                    $points2_total = $points2_total + $team_points['bpoints'];                    
                }                    
            }
            
            /*
            echo "<pre>";
            echo $rnd . " :: ".$team['uid'] . " :: ".$team['team'] ." :: ". $score_plus_total." :: ". $score_min_total." :: ".$points1_total." :: ".$points2_total;
            echo "</pre>";
            */
                                  
            $count_round_match = (abs($score_plus_total) + abs($score_min_total)) / 2 ;
            /* prepare for sort-array (table rang) */
            $sort_team[]= $team;
            $sort_score_plus_total[]= $score_plus_total;
            $sort_score_min_total[]= $score_min_total;
            $sort_points1_total[]= $points1_total;
            $sort_points2_total[]= $points2_total;
            $sort_count_match[] = $count_round_match;
            
            $score_plus_total = 0;
            $score_min_total = 0;
            $points1_total = 0;
            $points2_total = 0;
        }
        
        
        // table sort per rang
        $rang_table = [];
        if(isset($teams_rang)){
            array_multisort(
                $sort_score_plus_total, SORT_DESC, SORT_NUMERIC,
                $sort_score_min_total, SORT_ASC, SORT_NUMERIC,
                $sort_points1_total, SORT_DESC, SORT_NUMERIC,
                $sort_points2_total, SORT_DESC, SORT_NUMERIC,
                $sort_team, SORT_ASC,
                $sort_count_match,
                $teams_rang);
            
            //Ausgabe Tabelle sortiert
            for($i=0; $i < count($teams_rang); $i++){
                $rang_table[$i]['team'] = $sort_team[$i];
                $rang_table[$i]['score_plus'] = $sort_score_plus_total[$i];
                $rang_table[$i]['score_min'] = $sort_score_min_total[$i];
                $rang_table[$i]['points1'] = $sort_points1_total[$i];
                $rang_table[$i]['points2'] = $sort_points2_total[$i];
                $rang_table[$i]['count_match'] = $sort_count_match[$i];
            }            
        }
       
        return $rang_table;
    }
}
