<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Plate Ttc Additions',
    'description' => 'Plate tt_content additions - provides additional generic fields, which can be used in extensions or a them',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Kolya von Droste zu Vischering',
    'author_email' => 'jasker@dipool-web.de',
    'author_company' => 'AtomicPlan',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.5.99',
        ]
    ]
];
