<?php
$ll = 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:';
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_team',
        'label' => 'team',
        'iconfile' => 'EXT:chess_manager/Resources/Public/Icons/Team.svg',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
    ],
    'columns' => [
        'team' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_team.item_label',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'required, trim',
            ],
        ],
        'note' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_team.item_note',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
            ],
        ],
        'sort' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player.item_sort',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim',
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
        '0' => ['showitem' => '--palette--;;name_sort, note, --palette--;;paletteCore,
            --div--;' . $ll . 'notes, note'],
    ],
    'palettes' => [
        'paletteCore' => [
            'showitem' => 'hidden,',
        ],
        'name_sort' => [
            'showitem' => 'team, sort',
        ],
    ]
];