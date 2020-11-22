<?php
defined('TYPO3_MODE') || die('Access denied.');

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['chess_manager'] = 'EXT:chess_manager/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:chess_manager/Configuration/TsConfig/Page/All.tsconfig">');

/***************
 * Config Extension
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ChessManager',
    'TeamList',
    [\Cg\ChessManager\Controller\ChessManagerController::class => 'list'],
    [\Cg\ChessManager\Controller\ChessManagerController::class => '',]
);
