<?php

// LOCALE: en, eu
define('LOCALE', 'en');

// load from file
$messages = unserialize(file_get_contents(__DIR__ . '/' . LOCALE . '.ser'));

$hello = new MessageFormatter(LOCALE, );

?>