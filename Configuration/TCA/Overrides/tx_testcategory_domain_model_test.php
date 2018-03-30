<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
    'test_category',
    'tx_testcategory_domain_model_test',
    'category',
    [
        'label' => 'Category',
        'exclude' => false
    ]
);

# Enable language synchronisation for the category field
$GLOBALS['TCA']['tx_testcategory_domain_model_test']['columns']['category']['config']['behaviour']['allowLanguageSynchronization'] = true;
