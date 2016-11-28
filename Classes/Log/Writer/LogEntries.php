<?php
namespace Cobweb\LogEntries\Log\Writer;

/***************************************************************
 * Copyright notice
 *
 * (c) 2013 Julien Henchoz <typo3@cobweb.ch>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Sends log messages to Logentries.com
 *
 */
class LogEntries extends \TYPO3\CMS\Core\Log\Writer\AbstractWriter {
    /**
     * Writes the log record to php://stderr
     *
     * @param \TYPO3\CMS\Core\Log\LogRecord $record Log record
     * @return \TYPO3\CMS\Core\Log\LogRecord
     */
    public function writeLog(\TYPO3\CMS\Core\Log\LogRecord $record) {
        if (strstr(GeneralUtility::getHostname(), '.cobweb.blue')) {
            $context = 'STAGING';
        } elseif (strstr(GeneralUtility::getHostname(), '.cobweb.dev')) {
            $context = 'DEV';
        } else {
            $context = 'PROD';
        }

        $log = include \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('logentries') . 'Lib/LeLogger/logentries.php';
        $log->log($context . ' - ' . $record->getMessage(), $record->getLevel());
        return $record;
    }
}

?>
