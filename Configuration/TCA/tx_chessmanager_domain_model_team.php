<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_team',
        'label' => 'team',
        'iconfile' => 'EXT:chess_manager/Resources/Public/Icons/Team.svg',
    ],
    'columns' => [
        'team' => [
            'label' => 'LLL:EXT:chess_manager/Resources/Private/Language/locallang_db.xlf:tx_chessmanager_domain_model_team.item_label',
            'config' => [
                'type' => 'input',
                'size' => '20',
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
    ],
    'types' => [
        '0' => ['showitem' => 'team, note'],
    ],
];