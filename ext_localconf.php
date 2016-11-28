<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('logentries') . '/Classes/Log/Logger.php');
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('logentries') . '/Classes/Log/Writer/LogEntries.php');

/**
 * Define which logWriter to use for our logging class
 */
$GLOBALS['TYPO3_CONF_VARS']['LOG']['Cobweb']['LogEntries']['Log']['Logger'] = array(
    'writerConfiguration' => array(
        \TYPO3\CMS\Core\Log\LogLevel::DEBUG => array(
            'Cobweb\\LogEntries\\Log\\Writer\\LogEntries' => array(
            )
        ),
    )
);