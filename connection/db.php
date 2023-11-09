<?php

class Database{
public $con;
public function __construct(){
    $this->con = mysqli_connect("localhost", "root", "", "medstock");
    // if ($this->con) {
    //    echo "Connected";
    // }else {
    //     echo "Not connected";
    // }
}

}
$obj = new Database();