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
        /*
            var_dump($this->getSaisons());
            exit();
            $results = $this->resultRepository->allSorted();
       */
        $GLOBALS['TSFE']->setJS($this->extKey,'alert("Hallo Javascript");');
        $results = $this->resultRepository->saison_round('2019/2020', 7);
       $this->view->assign('results', $results);
       $this->view->assign('saisons', $this->getSaisons());

    }

    /**
     * prepare saisons for select box
     *
     * @return array
     */
    public function getSaisons() {
        $saisons = [];
        $entries = ['2008/2009',
            '2009/2010',
            '2009/2010',
            '2010/2011',
            '2011/2012',
            '2012/2013',
            '2013/2014',
            '2014/2015',
            '2015/2016',
            '2016/2017',
            '2017/2018',
            '2018/2019',
            '2019/2020',
            '2020/2021',
            '2021/2022',
            '2022/2023',
            '2023/2024',
            '2024/2025',
            '2025/2026',
            '2026/2027',
            '2027/2028',
            '2029/2030',
            '2030/2031',
        ];

        foreach ($entries as $entry) {
            $saison = new \stdClass();
            $saison->key = $entry;
            $saison->value = $entry;
            $saisons[] = $saison;
        }

        return $saisons;
    }
}
