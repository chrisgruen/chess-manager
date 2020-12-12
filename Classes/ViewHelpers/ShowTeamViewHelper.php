<?php
namespace ChrisGruen\ChessManager\ViewHelpers;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class ShowTeamViewHelper
 */
class ShowTeamViewHelper extends AbstractViewHelper
{

    /**
     * Initialize arguments
     */
    public function initializeArguments()
    {
        $this->registerArgument('team', 'int', true);
    }

    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {

        $uid_team = $arguments['team'];

        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable('tx_chessmanager_domain_model_team');

        $team = $queryBuilder
            ->select('tx_chessmanager_domain_model_team.team')
            ->from('tx_chessmanager_domain_model_team')
            ->where(
                $queryBuilder->expr()->eq('tx_chessmanager_domain_model_team.uid', $uid_team, \PDO::PARAM_INT)
            )
            ->execute()
            ->fetchColumn(0);

        return $team;
    }
}

