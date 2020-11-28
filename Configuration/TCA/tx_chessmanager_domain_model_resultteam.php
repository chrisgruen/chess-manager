<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam',
        'label' => 'saison_game',
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
		        'type' => 'select',
		        'renderType' => 'selectSingle',
		        'items' => [
		            ['2008/2009', '2008/2009'],
		            ['2009/2010', '2009/2010'],
		            ['2010/2011', '2010/2011'],
		            ['2011/2012', '2011/2012'],
		            ['2012/2013', '2012/2013'],
		            ['2013/2014', '2013/2014'],
		            ['2014/2015', '2014/2015'],
		            ['2015/2016', '2015/2016'],
		            ['2016/2017', '2016/2017'],
		            ['2017/2018', '2017/2018'],
		            ['2018/2019', '2018/2019'],
		            ['2019/2020', '2019/2020'],
		            ['2020/2021', '2020/2021'],
		            ['2021/2022', '2021/2022'],
		            ['2022/2023', '2022/2023'],
		            ['2023/2024', '2023/2024'],
		            ['2024/2025', '2024/2025'],
		            ['2025/2026', '2025/2026'],
		            ['2026/2027', '2026/2027'],
		            ['2027/2028', '2027/2028'],
		            ['2029/2030', '2029/2030'],
		            ['2030/2031', '2030/2031'],
		        ],
		    ],
        ],
        'round_game' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.round_game',
            'config' => [
                'type' => 'input',
                'size' => '5',
                'eval' => 'required, num, trim',
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
                'eval' => 'required, double2, trim',
            ],
        ],
        'away_point1' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.away_point1',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'eval' => 'required, double2, trim',
            ],
        ],
        'home_point2' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.home_point1',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'eval' => 'required, double2, trim',
            ],
        ],
        'away_point2' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_resultteam.away_point1',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'eval' => 'required, double2, trim',
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