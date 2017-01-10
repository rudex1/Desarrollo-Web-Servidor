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

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;

  echo($accessToken);
  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}