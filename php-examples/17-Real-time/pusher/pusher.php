<?php

// composer: load all modules defined in composer.json
require 'vendor/autoload.php';

$options = array(
    'encrypted' => true
);

$pusher = new Pusher(
    'ab093ba7e511bf6a9e12',
    'c13c726d46bfac65b2ae',
    '283636',
    $options
);

$data['message'] = 'hello world';
$pusher->trigger('my-channel', 'my-event', $data);

?>