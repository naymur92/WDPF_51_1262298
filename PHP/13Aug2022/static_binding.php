<?php
class Employee {
    public static $favSport = "Football";
    public static function watchTV()
    {
        echo "Watching ".self::$favSport;
    }
}


class Executive extends Employee {
    public static $favSport = "Polo";
}

echo Employee::$favSport ."\n";
echo Executive::$favSport ."\n";
echo Employee::watchTV() ."\n";
echo Executive::watchTV() ."\n";
?>