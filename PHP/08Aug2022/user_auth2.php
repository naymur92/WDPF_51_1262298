<?php
    // Encryption: md5, sha1
    // echo sha1('abcd');

    $pass = '81fe8bfe87576c3ecb22426f8e57847382917acf';
    if (($_SERVER['PHP_AUTH_USER'] != 'tcld') || (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $pass)) {
        header('WWW-Authenticate: Basic Realm="Secret Stash"');
        header('HTTP/1.0 401 Unauthorized');
        print('You must provide the proper credentials!');
        exit;
    }

?>

Hello