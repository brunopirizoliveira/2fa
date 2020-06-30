<?php

$path = 'vendor/sonata-project/google-authenticator/';

include_once $path.'src/FixedBitNotation.php';
include_once $path.'src/GoogleAuthenticatorInterface.php';
include_once $path.'src/GoogleAuthenticator.php';
include_once $path.'src/GoogleQrUrl.php';

$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();

$salt = '7WAO342QFANY6IKBF7L7SWEUU79WL3VMT920VB5NQMW';
$secret = $username.$salt;
$check_this_code = $_POST['code'];
if ($g->checkCode($secret, $check_this_code)) {
  echo 'Success!';
} else {
  echo 'Invalid login';
}