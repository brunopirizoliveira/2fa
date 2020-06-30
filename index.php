<?php

require __DIR__ . '/vendor/autoload.php';

$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
// $username='bruno';
// $salt = 'XVQ2UIGO75XRUKJO';
// $secret = $username.$salt;
$secret = $_POST['key'];
$check_this_code = $_POST['code'];

try {
    if ($g->checkCode($secret, $check_this_code)) {
        echo 'Success!';
      } else {
        echo 'Invalid login';
      }
} catch(Exception $e) {
    echo $e->getMessage();
}