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

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Log\LogRecord;
use TYPO3\CMS\Core\Log\Writer\AbstractWriter;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Sends log messages to Logentries.com
 *
 */
class LogEntries extends AbstractWriter
{
    /**
     * @var string LogEntries token
     */
    protected $token = '';

    public function __construct(array $options = [])
    {
        parent::__construct($options);
        $this->token = GeneralUtility::makeInstance(ExtensionConfiguration::class)->get(
                'logentries',
                'logentriesToken'
        );

    }

    /**
     * Writes the log record to Logentries.
     *
     * @param LogRecord $record Log record
     * @return LogRecord
     */
    public function writeLog(LogRecord $record): LogRecord
    {
        $contextObject = GeneralUtility::getApplicationContext();
        if ($contextObject->isDevelopment()) {
            $fullContext = (string)$contextObject;
            if (strpos($fullContext, 'DDEV') !== false) {
                $context = 'DEV';
            } else {
                $context = 'STAGING';
            }
        } elseif ($contextObject->isTesting()) {
            $context = 'TEST';
        } else {
            $context = 'PROD';
        }

        $log = \cbschuld\LogEntries::getLogger($this->token,true,true);
        $message = $context . ' - ' . $record->getMessage();
        if ($message) {
            $log->log($record->getLevel(), $context . ' - ' . $record->getMessage());
        }
        return $record;
    }
}
