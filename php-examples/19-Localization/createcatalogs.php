<?php
// create locales
// from 'PHP cookbook'

$messages = array();

$messages['en'] =
    array('HELLO' => 'Hello World!',
          'BYE' => 'Bye!');
$messages['eu'] =
    array('HELLO' => 'Kaixo Mundua!',
          'BYE' => 'Agur!');

foreach ($messages as $locale => $entries) {
    file_put_contents(__DIR__ . "/$locale.ser", serialize($entries));
}

print "Messages creates."

?>
