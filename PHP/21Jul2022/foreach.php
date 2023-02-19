<?php
    echo "<pre>\n";

    $subjects = array("PHP", "Java", "Oracle", "Python", "C#");

    foreach($subjects as $sub){
        echo $sub . "\n";
    }

    echo "\n";
    $subjects1 = array("Naymur"=>"PHP", "Sajib"=>"Java", "Victor"=>"Oracle", "Mumu"=>"C#");

    foreach($subjects1 as $name => $sub1){
        echo "{$name} assigned for {$sub1}.\n";
    }


    echo "\n";
    $languages = array(
        "PHP"=>"www.php.net",
        "Java"=>"www.java.com",
        "Oracle"=>"www.oracle.com",
        "Python"=>"www.python.org",
        "C#"=>"www.asp.net"
    );

    foreach($languages as $title => $site){
        echo "<a href=\"http://{$site}\">{$title}</a>\n";
    }
    echo "\n";
?>