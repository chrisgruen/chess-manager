<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam',
        'label' => 'home_team',
        'iconfile' => 'EXT:chess_manager/Resources/Public/Icons/Result.svg',
    ],
    'columns' => [
		'saison_game' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.saison_game',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
        'home_team' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.home_team',
            'config' => [
                'type' => 'select',
				'renderType' => 'selectSingle',
                'foreign_table' => 'tx_chessmanager_domain_model_team',
				'fieldWizard' => [
					'selectIcons' => [
					'disabled' => false,
					],
				],
            ],
        ],
		'away_team' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.away_team',
            'config' => [
                'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_chessmanager_domain_model_team',
                'fieldWizard' => [
					'selectIcons' => [
					'disabled' => false,
					],
				],
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'saison_game, home_team, away_team'],
    ],
];