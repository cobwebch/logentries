# Logentries TYPO3 extension

This extension is a simple wrapper around the Logentries library, which
makes it possible to use it with the TYPO3 logging framework.

Example:

```
$GLOBALS['TYPO3_CONF_VARS']['LOG']['Cobweb']['LogEntries']['Log']['Logger'] = array(
    'writerConfiguration' => array(
        \TYPO3\CMS\Core\Log\LogLevel::DEBUG => array(
            'Cobweb\\LogEntries\\Log\\Writer\\LogEntries' => array(
            )
        ),
    )
);
```
The extension also provides some static methods for quickly writing to
Logentries:

```
\Cobweb\LogEntries\Log\Logger::emergency($process, $message);
```

where `$process` would be any string identifying the currently running script
and `$message` is the actual message.

A method exists for each log level: emergency, critical, alert, error,
warning, notice, info and debug.
