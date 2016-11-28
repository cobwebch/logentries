<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

/**
 * Define which logWriter to use for our logging class
 */
$GLOBALS['TYPO3_CONF_VARS']['LOG']['Cobweb']['LogEntries']['Log']['Logger'] = array(
        'writerConfiguration' => array(
                \TYPO3\CMS\Core\Log\LogLevel::DEBUG => array(
                        \Cobweb\LogEntries\Log\Writer\LogEntries::class => array()
                ),
        )
);
