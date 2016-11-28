<?php
namespace Cobweb\LogEntries\Log;

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

use TYPO3\CMS\Core\Log\LogManager;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class Logger
 * This class can be called from anywhere within any TYPO3 extension.
 * @package Cobweb\LogEntries\Classes
 */
class Logger
{
    /**
     * Sends an emergency log to logentries
     * @param string $process Process related to this log
     * @param string $message
     * @return string
     */
    static public function emergency($process, $message)
    {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
        // Write to Log
        $logger->emergency($process . ' - ' . $message);
        return $message;
    }


    /**
     * Sends a critical log to logentries
     * @param string $message
     * @return string
     */
    static public function critical($process, $message)
    {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
        // Write to Log
        $logger->critical($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends an alert log to logentries
     * @param string $message
     * @return string
     */
    static public function alert($process, $message)
    {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
        // Write to Log
        $logger->alert($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends an error log to logentries
     * @param string $message
     * @return string
     */
    static public function error($process, $message)
    {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
        // Write to Log
        $logger->error($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends a warning log to logentries
     * @param string $message
     * @return string
     */
    static public function warning($process, $message)
    {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
        // Write to Log
        $logger->warning($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends a notice log to logentries
     * @param string $message
     * @return string
     */
    static public function notice($process, $message)
    {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
        // Write to Log
        $logger->notice($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends an info log to logentries
     * @param string $message
     * @return string
     */
    static public function info($process, $message)
    {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
        // Write to Log
        $logger->info($process . ' - ' . $message);
        return $message;
    }

    /**
     * Sends a debug log to logentries
     * @param string $message
     * @return string
     */
    static public function debug($process, $message)
    {
        /** @var \TYPO3\CMS\Core\Log\Logger $logger */
        $logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
        // Write to Log
        $logger->debug($process . ' - ' . $message);
        return $message;
    }
}
