<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam',
        'label' => 'date_match',
        'iconfile' => 'EXT:chess_manager/Resources/Public/Icons/Result.svg',
    ],
    'columns' => [
        'class_game' => [
            'label' => 'Class game',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Keine gewählt', 0],
                    ['Bezirksliga', 1],
                    ['Bezirksklasse Nord', 2],
                    ['Kreisunion West', 3],
                    ['Kreisliga Mansfeld-Südharz', 4],
                    ['Südharzliga', 5],
                ],
            ],
        ],
		'saison_game' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.saison_game',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim',
            ],
        ],
        'round_game' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.round_game',
            'config' => [
                'type' => 'input',
                'size' => '5',
                'eval' => 'trim',
            ],
        ],
        'date_match' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.date_game',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'dbType' => 'datetime',
                'eval' => 'datetime,null',
            ],
        ],
        'home_team' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.home_team',
            'config' => [
                'type' => 'select',
				'renderType' => 'selectSingle',
                'foreign_table' => 'tx_chessmanager_domain_model_team',
                /*
				'fieldWizard' => [
					'selectIcons' => [
					'disabled' => false,
					],
				],
				*/
            ],
        ],
		'away_team' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.away_team',
            'config' => [
                'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_chessmanager_domain_model_team',
                /*
                'fieldWizard' => [
					'selectIcons' => [
					'disabled' => false,
					],
				],
				*/
            ],
        ],
        'home_point1' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.home_point1',
            'config' => [
                'type' => 'input',
                'size' => '10',
            ],
        ],
        'away_point1' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.away_point1',
            'config' => [
                'type' => 'input',
                'size' => '10',
            ],
        ],
        'home_point2' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.home_point1',
            'config' => [
                'type' => 'input',
                'size' => '10',
            ],
        ],
        'away_point2' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.away_point1',
            'config' => [
                'type' => 'input',
                'size' => '10',
            ],
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'class_game, --palette--;;saison, --palette--;;teams, --palette--;;teams_point1,--palette--;;teams_point2'],
    ],
    'palettes' => [
        'saison' => [
            'showitem' => 'saison_game, round_game, date_match',
        ],
        'teams' => [
            'showitem' => 'home_team, away_team',
        ],
        'teams_point1' => [
            'showitem' => 'home_point1, away_point1',
        ],
        'teams_point2' => [
            'showitem' => 'home_point2, away_point2',
        ]
    ]
];