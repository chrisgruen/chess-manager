<?php
namespace ChrisGruen\ChessManager\ViewHelpers;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class CheckResultPlayerViewHelper
 */
class CheckResultPlayerViewHelper extends AbstractViewHelper
{
    
    /**
     * Initialize arguments
     */
    public function initializeArguments()
    {
        $this->registerArgument('reportid', 'int', true);
    }
    
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
        ) {
          
        $reportid = $arguments['reportid'];
        
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_chessmanager_domain_model_result');
        $sql = " SELECT rp.score_report, rs.uid  FROM tx_chessmanager_domain_model_result rs
           inner join tx_chessmanager_domain_model_resultplayer rp on rs.uid = rp.score_report
           where rp.score_report = '".$reportid."' limit 1";
        
        $result = $connection->executeQuery($sql)->fetch();
        
   
        if($result != Null) {
            return "einzeln";
        } else {
            return false;
        }
    }
}
