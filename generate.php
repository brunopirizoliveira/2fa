<?php

declare(strict_types=1);
require __DIR__ . '/vendor/autoload.php';

$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();
$username='bruno';
// $salt = 'XVQ2UIGO75XRUKJO';
// $secret = $username.$salt;
$secret = $g->generateSecret();
$url = Sonata\GoogleAuthenticator\GoogleQrUrl::generate($username, $secret);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2FA</title>
</head>
<body>
    <img src="<?=$url?>">
    <form action="index.php" method="post">
        <br />
        <br />
        <input type="text" name="code" />
        <input type="hidden" name="key" value="<?=$secret?>" />
        <button type="submit">Login</button>
    </form>
</body>
</html>