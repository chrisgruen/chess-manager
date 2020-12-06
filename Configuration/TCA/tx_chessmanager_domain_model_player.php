<?php
$ll = 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:';
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player',
        'label' => 'name',
        'iconfile' => 'EXT:chess_manager/Resources/Public/Icons/Player.svg',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'sortby' => 'sort',
    ],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player.item_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'required, trim',
            ],
        ],
		'dwz' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player.item_dwz',
            'config' => [
                'type' => 'input',
                'size' => 15,
                'eval' => 'trim',
            ],
        ],
		'phone' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player.item_phone',
            'config' => [
                'type' => 'input',
                'size' => 15,
                'eval' => 'trim',
            ],
        ],
        'note' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_team.item_note',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
            ],
        ],
		'status' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player.item_status',
            'config' => [
                'type' => 'check',
                'items' => [
					['aktiv', ''],
				],
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
    ],
    'types' => [
        '0' => ['showitem' => '--palette--;;name_sort, dwz, phone, status, --palette--;;paletteCore,
                 --div--;' . $ll . 'notes, note'],
    ],
    'palettes' => [
        'name_sort' => [
            'showitem' => 'name, sort',
        ],
    ],
];