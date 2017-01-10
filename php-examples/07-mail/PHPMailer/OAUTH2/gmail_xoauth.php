<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//require '../PHPMailerAutoload.php';
require 'vendor/autoload.php';

//Load dependencies from composer
//If this causes an error, run 'composer install'
//require '../vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailerOAuth;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Set AuthType
$mail->AuthType = 'XOAUTH2';

//User Email to use for SMTP authentication - Use the same Email used in Google Developer Console
$mail->oauthUserEmail = "zmwebdev@gmail.com";

//Obtained From Google Developer Console
$mail->oauthClientId = "200379554758-ob58oere7jhpvv6885gc2cf42oobgqun.apps.googleusercontent.com";

//Obtained From Google Developer Console
$mail->oauthClientSecret = "rH_mHGtcTt4yvY7Z3DKkLB1R";

//Obtained By running get_oauth_token.php after setting up APP in Google Developer Console.
//Set Redirect URI in Developer Console as [https/http]://<yourdomain>/<folder>/get_oauth_token.php
// eg: http://localhost/phpmail/get_oauth_token.php
$mail->oauthRefreshToken = "1/ENMw5HXxLnSKTW-kKPue4S7XoHzNS2ESVwtyGZuqN4g";

//Set who the message is to be sent from
//For gmail, this generally needs to be the same as the user you logged in as
$mail->setFrom('zmwebdev@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('zabor.email@gmail.com', 'John Doe');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test 2';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML('Hello from PHP app');
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}