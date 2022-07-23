<?php
    echo "<pre>\n";
    function userProfile(){
        // $profile = array("Golam Rabbany", "Round 51", "WDPF");

        //Another way of declaration
        $profile[] = "Golam Rabbany";
        $profile[] = "Round 51";
        $profile[] = "WDPF";

        return $profile;
    }

    //For testing purpose
    // $x = userProfile();
    // var_dump($x);

    list($name, $round, $course) = userProfile();
    echo "Student name= {$name} \n";
    echo "Round= {$round} \n";
    echo "Course= {$course} \n";
?>