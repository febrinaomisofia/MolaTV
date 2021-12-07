<?php
  include("include/koneksi.php");

  $id = $_GET['id'];

/*  if (empty($_SESSION['user'])) {
    header ("Location: error.php");
    die;
  }*/
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MOLA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="img/style.css">  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-sm justify-content-center">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php"id=<?=$id?>>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="living.php"id=<?=$id?>>Living</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="sport.php"id=<?=$id?>>Sports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kids.php"id=<?=$id?>>Kids</a>
        </li>
      </ul>
    </nav>
  </div>
</body>
</html>
