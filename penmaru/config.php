<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "penmaru";

$koneksi = new mysqli($host, $username, $password, $database);
if($koneksi){
    echo "DataBase Terkoneksi";
}else{
    echo "DataBase Tidak Terkoneksi";
}
?>