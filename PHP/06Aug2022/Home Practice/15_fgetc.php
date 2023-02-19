<?php
//This file must run with terminal
    echo 'Are you sure you want to delete? (y/n) ';

    $input = fgetc(STDIN);

    if (strtoupper($input) == 'Y')
    {
        //unlinkn will delete this file
        unlink('users1.txt');
    }
?>