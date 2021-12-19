<?php
session_start();
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';
$client_id = '1029381682958-88k07kv2phdkl207molqn6sucj9o22pc.apps.googleusercontent.com'; //google client id
$client_secret = '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';
$redirect_url = 'http://localhost/login_php/google.php';

$gclient = new Google_Client();
$gclient->setApplicationName('Google login');
$gclient->setClientId($client_id);
$gclient->setClientSecret($client_secret);
$gclient->setRedirectUri($redirect_url);

$google_oauthv2 = new Google_Oauth2Service($gclient);
