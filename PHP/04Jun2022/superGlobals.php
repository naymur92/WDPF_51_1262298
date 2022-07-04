<h1>$_SERVER superGlobal</h1>
<?php
    echo "<pre>";
    print_r($_SERVER);

    echo "<br>";
    echo $_SERVER['PHP_SELF'];

    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];

    echo "<br>";
    echo $_SERVER['REQUEST_URI'];

    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    // echo "</pre>";
?>

<h1>$_GET superGlobal</h1>
<a href="superGlobals.php?name=Robbany">Click Here</a>
<?php
    print_r($_GET);
?>