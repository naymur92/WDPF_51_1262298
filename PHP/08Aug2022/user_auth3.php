<?php
    // Preset authentication status to false
    $authorized = false;
    if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
        // Read the authentication file into an array
        $authFile = file("/opt/lampp/htdocs/WDPF_51_1262298/PHP/08Aug2022/authFile.txt");
        // Search array for authentication match
        foreach ($authFile as $line) {
            list($user, $hash) = explode(":", $line);
            if ($_SERVER['PHP_AUTH_USER'] == $user && sha1($_SERVER['PHP_AUTH_PW']) == trim($hash))
            $authorized = true;
            break;
        }
    }

    // If not authorized, display authentication prompt or 401 error
    // If (!$_SERVER['HTTPS']) {
    //     echo " Please use HTTPS when accessing this document";
    //     exit;
    // }
    if (!$authorized) {
        header('WWW-Authenticate: Basic Realm="Secret Stash"');
        header('HTTP/1.0 401 Unauthorized');
        print('You must provide the proper credentials!');
        exit;
    }
    // Restricted materials goes here
    echo "hi, how are you?";
?>