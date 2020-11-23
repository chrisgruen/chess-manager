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
                'eval' => 'trim',
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
    ],
    'types' => [
        '0' => ['showitem' => 'name, dwz, phone, status'],
    ],
];