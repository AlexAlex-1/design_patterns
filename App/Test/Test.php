<?php
namespace App\Test;

use DB\Connect;

class Test implements Index
{
    public $db;

    public function start()
    {
        $handle = @fopen("categories.txt", "r");
        if ($handle) {
            echo 111;
            while (($buffer = fgets($handle, 4096)) !== false) {
                echo $buffer;
            }
            if (!feof($handle)) {
                echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
            }
            fclose($handle);
        }
        /*$file = file_get_contents($houseNumber.'.txt');
        $file .= 'House number: '.$houseNumber.' ';
        if (is_array($this->parts)) {
            foreach($this->parts as $part) {
                $file .= $part;
            }
        }
        file_put_contents("$houseNumber.txt", $file);
        echo 'House has been created';*/




        $this->db = Connect::getDB();
        $this->db->connect()->query('INSERT INTO functions (function_name) values (2121)');
        $string = "Absdefghijklmnopqrstuvwxyzzzz";
        echo '<pre>';
        //var_dump(opcache_get_status());
        //print_r($_SERVER);
    }
}
