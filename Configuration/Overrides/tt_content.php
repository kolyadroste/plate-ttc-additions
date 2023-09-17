<?php
defined('TYPO3') or die();

// Adds the content element to the "Type" dropdown
call_user_func(function($extension = 'plate_ttc_additions') {

    $additional_columns = [
        'tx_plate_ttc_additions_links' => [
            'exclude' => 1,
            'label' => 'Links',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_plate_ttc_additions_links',
                'foreign_field' => 'parentid',
                'foreign_table_field' => 'parenttable',
                'foreign_label' => 'header',
                'foreign_sortby' => 'sorting',
                'maxitems' => 30,
                'appearance' => [
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ]
    ];


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additional_columns);
});