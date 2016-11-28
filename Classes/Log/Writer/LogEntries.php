<?php
namespace Cobweb\LogEntries\Log\Writer;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Log\LogRecord;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Sends log messages to Logentries.com
 */
class LogEntries extends \TYPO3\CMS\Core\Log\Writer\AbstractWriter {
    /**
     * Writes the log record to Logentries.
     *
     * @param LogRecord $record Log record
     * @return LogRecord
     */
    public function writeLog(LogRecord $record) {
        $hostName = GeneralUtility::getHostname();
        if (strpos($hostName, '.cobweb.blue') !== false) {
            $context = 'STAGING';
        } elseif (strpos($hostName, '.cobweb.dev') !== false) {
            $context = 'DEV';
        } else {
            $context = 'PROD';
        }

        $log = include ExtensionManagementUtility::extPath('logentries') . 'Lib/LeLogger/logentries.php';
        $log->log($context . ' - ' . $record->getMessage(), $record->getLevel());
        return $record;
    }
}
