<?php
$ll = 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:';
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultplayer',
        'label' => 'score_report',
        'label_alt' => 'player_myteam',
        'label_alt_force' => 1,
        'iconfile' => 'EXT:chess_manager/Resources/Public/Icons/Team.svg',
        'default_sortby' => 'ORDER BY uid DESC',
    ],
    'columns' => [
        'score_report' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultplayer.score_report',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'eval' => 'required, trim',
            ],
        ],
        'player_myteam' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultplayer.player_myteam',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_chessmanager_domain_model_player',
                'foreign_table_where' => 'AND 1=1 Order by sort ASC',
            ],
        ],
        'player_opponent' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player.player_opponent',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'required, trim',
            ],
        ],
        'result_myteam' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_result.result_myteam',
            'config' => [
                'type' => 'input',
                'size' => '3',
                'eval' => 'required, double2, trim',
            ],
        ],
        'result_opponent' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_result.result_opponent',
            'config' => [
                'type' => 'input',
                'size' => '3',
                'eval' => 'required, double2, trim',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'score_report, --palette--;;single_result'],
    ],
    'palettes' => [
        'single_result' => [
            'showitem' => 'player_myteam, result_myteam, player_opponent, result_opponent',
        ],
    ]
];

