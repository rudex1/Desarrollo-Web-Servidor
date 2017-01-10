<?php
// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
//Image::configure(array('driver' => 'imagick'));
Image::configure(array('driver' => 'gd'));


// and you are ready to go ...
//$img = Image::make('zubiri.png')->resize(320, 240)->insert('zubiri320x240.png');
$img = Image::make('zubiri.png');
// resize image to fixed size
$img->resize(300, 200);
// rotate image 45 degrees clockwise
$img->rotate(45);
// save the same file as jpeg with default quality
$img->save('zubiri-45.png');

$path = './zubiri-45.png';

header('Content-Type: image/png');
header('Content-Disposition: inline; filename='.$path);
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

readfile($path);