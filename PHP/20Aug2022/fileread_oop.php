<?php
    class fileread{
        public function getdata($addr){
            $fh = fopen($addr, 'r');
            while(!feof($fh)){
                $data = fgets($fh);
                echo $data . '<br>';
            }
        }
    }

    $addr = "file.txt";
    $obj1 = new fileread();
    $obj1 -> getdata($addr);
?>