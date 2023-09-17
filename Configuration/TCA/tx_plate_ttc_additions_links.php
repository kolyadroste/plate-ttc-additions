<?php
return [
    'ctrl' => [
        'label' => 'text',
        'tstamp' => 'tstamp',
        'title' => 'Button',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'sortby' => 'sorting',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:plate_ttc_additions/Resources/Public/Icons/Button.svg',
    ],
    'interface' => [
        'showRecordFieldList' => 'title',
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
    ],
    'columns' => [
        'hidden' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'header' => [
            'label' => 'Titel',
            'config' => [
                'type' => 'input',
            ],
        ],
        'layout' => [
            'label' => 'Aussehen',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Standard (Text)', ''],
                    ['Icon', 'icon'],
                    ['Button', 'button']
                ],
            ],
        ],
        'tx_plate_ttc_additions_icon' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:bw_icons/Resources/Private/Language/locallang.xlf:icon',
            'config' => [
                'type' => 'input',
                'renderType' => 'iconSelection'
            ],
        ],
        'tx_plate_ttc_additions_method' => [
            'exclude' => 0,
            'label' => 'Aktion (ersetzt Link)',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Standard (Nein)', '']
                ],
            ],
        ],
        'typolink' => [
            'label' => 'Link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => '--palette--;;general',
        ],
    ],
    'palettes' => [
        'general' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.general',
            'showitem' => 'header,hidden,layout,typolink,--linebreak--,tx_plate_ttc_additions_icon,tx_plate_ttc_additions_method',
        ],
    ],
];
