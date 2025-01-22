<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Digital Marketing Framework - Notification - Mail',
    'description' => 'DMF Notification Channel via Mail',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'dmf_core' => '2.3.0-2.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
