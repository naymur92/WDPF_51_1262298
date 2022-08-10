<?php
    $str = "Hèllo, I'm Naymur. My homètown is <chuadanga>. I'm a Web Devèloper. My mònthly salary is $15,000.";

    echo htmlentities($str, ENT_COMPAT, "UTF-8")."\n";
?>