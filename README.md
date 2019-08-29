# LogEntries TYPO3 extension

This extension is a simple wrapper around the `cbschuld/logentries` library, which
makes it possible to use it with the TYPO3 logging framework.

Example:

```
$GLOBALS['TYPO3_CONF_VARS']['LOG']['Cobweb']['LogEntries']['Log']['Logger'] = [
    'writerConfiguration' => [
        \TYPO3\CMS\Core\Log\LogLevel::DEBUG => [
            'Cobweb\\LogEntries\\Log\\Writer\\LogEntries' => []
        ],
    ]
];
```
