<?php
/**
 * Extension Manager/Repository config file for ext "chess_manager".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Chess Manager',
    'description' => 'An extension to manage Chess results',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Cg\\ChessManager\\' => 'Classes',
        ],
    ],
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christian Grünwald',
    'author_email' => 'cg@romonta-schach.de',
    'author_company' => 'Cg',
    'version' => '1.0.0',
];
