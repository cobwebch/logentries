<?php
namespace Cobweb\LogEntries\Log;

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

/**
 * Class Logger
 * This class can be called from anywhere within any TYPO3 extension.
 * @package Cobweb\LogEntries\Classes
 */
class Logger {
    /**
     * Sends an emergency log to logentries
     * @param string $process Process related to this log
     * @param string $message
     * @return string
     */
    static public function emergency($process, $message) {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
        // Write to Log
        $logger->emergency($process . ' - ' . $message);
        return $message;
    }


    /**
     * Sends a critical log to logentries
     * @param string $message
     * @return string
     */
    static public function critical($process, $message) {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
        // Write to Log
        $logger->critical($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends an alert log to logentries
     * @param string $message
     * @return string
     */
    static public function alert($process, $message) {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
        // Write to Log
        $logger->alert($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends an error log to logentries
     * @param string $message
     * @return string
     */
    static public function error($process, $message) {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
        // Write to Log
        $logger->error($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends a warning log to logentries
     * @param string $message
     * @return string
     */
    static public function warning($process, $message) {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
        // Write to Log
        $logger->warning($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends a notice log to logentries
     * @param string $message
     * @return string
     */
    static public function notice($process, $message) {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
        // Write to Log
        $logger->notice($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends an info log to logentries
     * @param string $message
     * @return string
     */
    static public function info($process, $message) {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
        // Write to Log
        $logger->info($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends a debug log to logentries
     * @param string $message
     * @return string
     */
    static public function debug($process, $message) {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Log\\LogManager')->getLogger(__CLASS__);
        // Write to Log
        $logger->debug($process . ' - ' . $message);
        return $message;
    }
}
?>
