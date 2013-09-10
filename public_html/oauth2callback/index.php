<?php
include("../var.php");
include(CBASE."common.php");


header("Location: /myprofile");
/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
 
 /*
 
 
require_once CBASE.'/google-api-php-client/src/Google_Client.php';
require_once CBASE.'/google-api-php-client/src/contrib/Google_Oauth2Service.php';

session_start();

$client = new Google_Client();
$client->setApplicationName("Google UserInfo PHP Starter Application");
// Visit https://code.google.com/apis/console?api=plus to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
// $client->setClientId('insert_your_oauth2_client_id');
// $client->setClientSecret('insert_your_oauth2_client_secret');
// $client->setRedirectUri('insert_your_redirect_uri');
// $client->setDeveloperKey('insert_your_developer_key');
$oauth2 = new Google_Oauth2Service($client);

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
  return;
}

if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['token']);
  $client->revokeToken();
  unset($_COOKIE['ires']);
}

if ($client->getAccessToken()) {
  
  $user = $oauth2->userinfo->get();
  $ob_auth->google($user);
  




  // These fields are currently filtered through the PHP sanitize filters.
  // See http://www.php.net/manual/en/filter.filters.sanitize.php
  $email = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
  $img = filter_var($user['picture'], FILTER_VALIDATE_URL);
  $personMarkup = "$email<div><img class=\"img-rounded\" src='$img?sz=50'></div>";

  // The access token may have been updated lazily.
  $_SESSION['token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
}
*/
//header("Location: /?loginaction=1");

?>
<!doctype html>
<html>
<head><meta charset="utf-8"></head>
<body>
<header><h1>Google UserInfo Sample App</h1></header>
<?php if(isset($ob_auth->personMarkup)): ?>
<?php print $ob_auth->personMarkup ?>
<?php endif ?>
<?php

if(isset($ob_auth->authUrl)) {
	print "<a class='login' href='".$ob_auth->authUrl."'>Connect Me!</a>";
} else {
	print "<a class='logout' href='?logout'>Logout</a>";
}







echo "<pre>";
print_r($ob_auth->log);
echo "</pre><hr>";
echo "<pre>";
print_r($_SESSION);
echo "</pre><hr>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre><hr>";
echo "<pre>";
print_r($ob_auth);
echo "</pre><hr>";



?>
</body></html>