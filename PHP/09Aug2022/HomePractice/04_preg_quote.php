<?php

    $sp_chars = array(
        "This is Dollar sign~~~$",
        "This is Caret~~~^",
        "This is Asterisk~~~*",
        "This is Parenthesis~~~()",
        "This is Plus sign~~~+",
        "This is Minus sign~~~-",
        "This is Equal to sign~~~=",
        "This is Brace~~~{}",
        "This is Bracket~~~[]",
        "This is Vertical Bar~~~|",
        "This is Back Slash~~~\\",
        "This is Colon~~~:",
        "This is Angular Bracket~~~<>"
    );


    foreach($sp_chars as $sp_char){
        echo preg_quote($sp_char). "<br>";
    }

?>