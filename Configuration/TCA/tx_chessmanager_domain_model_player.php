<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_player',
        'label' => 'name',
        'iconfile' => 'EXT:chess_manager/Resources/Public/Icons/Player.svg',
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
        '0' => ['showitem' => '--palette--;;name_sort, dwz, phone, status'],
    ],
    'palettes' => [
        'name_sort' => [
            'showitem' => 'name, sort',
        ],
    ],
];