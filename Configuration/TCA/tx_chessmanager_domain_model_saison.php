<?php
$ll = 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:';
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_saison',
        'label' => 'saison',
        'label_alt' => 'class, team_rang',
        'label_alt_force' => 1,
        'iconfile' => 'EXT:chess_manager/Resources/Public/Icons/Team.svg',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'default_sortby' => 'ORDER BY uid DESC',
    ],
    'columns' => [
        'rang_id' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_saison.item_rang_id',
            'config' => [
                'type' => 'input',
                'size' => '1',
                'eval' => 'required, trim',
            ],
        ],
        'team_rang' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_saison.item_team_rang',
            'config' => [
                'type' => 'input',
                'size' => '25',
                'eval' => 'required, trim',
            ],
        ],
        'class' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_saison.item_class',
            'config' => [
                'type' => 'input',
                'size' => '25',
                'eval' => 'required, trim',
            ],
        ],
        'saison' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_saison.item_saison',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'eval' => 'required, trim',
            ],
        ],
        'count_player' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_saison.item_count_player',
            'config' => [
                'type' => 'input',
                'size' => '1',
                'eval' => 'required, trim',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => '--palette--;;name_saison1, --palette--;;name_saison2, --palette--;;paletteCore,
            --div--;' . $ll . 'notes, note'],
    ],
    'palettes' => [
        'paletteCore' => [
            'showitem' => 'hidden,',
        ],
        'name_saison1' => [
            'showitem' => 'saison, class',
        ],
        'name_saison2' => [
            'showitem' => 'rang_id, team_rang, count_player',
        ],
    ]
];
