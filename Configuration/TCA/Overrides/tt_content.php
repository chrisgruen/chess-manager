<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ChessManager',
    'ManageChessResults',
    'Chess manager',
    'EXT:chess_manager/Resources/Public/Icons/Extension.svg'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['chessmanager_managechessresults'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'chessmanager_managechessresults',
    'FILE:EXT:chess_manager/Configuration/FlexForms/flexform_chess.xml'
    );