<?php

//Include Google Client Library for PHP autoload file
require_once 'google-api-php-client/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('899035207855-5a3cc7o96h3q30ofru58djb91kf6hbbh.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://durakathanapala.lk/user/google_login/dashboard.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>