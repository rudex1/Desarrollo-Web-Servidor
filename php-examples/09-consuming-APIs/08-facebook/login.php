<?php

if(!session_id()) {
    session_start();
}

include 'credentials.php';

// include composer autoload
require 'vendor/autoload.php';

$fb = new \Facebook\Facebook([
  'app_id' => Credentials::$appId,
  'app_secret' => Credentials::$appSecret,
  'default_graph_version' => 'v2.8'
  // 'default_access_token' => Credentials::$appAccessToken, // optional  
]);

//# login.php
//$fb = new Facebook\Facebook([/* . . . */]);

$helper = $fb->getRedirectLoginHelper();
//$permissions = ['email', 'user_likes']; // optional
$permissions = ['email', 'user_likes', 'publish_actions']; // optional

//$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('https://php-examples-zmwebdev.c9users.io/09-consuming-APIs/08-facebook/fb-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
