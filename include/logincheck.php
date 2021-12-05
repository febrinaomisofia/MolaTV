<?php
include ("include/koneksi.php");

if(empty($_SESSION['user'])){
    header ("Location: login.php");
}
?>
