<?php

if(!isset($_SESSION)){
  session_start();
}

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'molatv';

//$koneksi = mysqli_connect($host, $user, $pass, $database);

$koneksi = mysqli_connect('localhost', 'root', '', 'molatv');

if($koneksi->connect_error){
  die("Koneksi gagal".$koneksi->connect_error);
}



?>
