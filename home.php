<?php
  include ("include/koneksi.php");

  if (!isset($_SESSION['username'])) {
    header ("Location: error.php");
    die;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/home.css">
    <title>MOLA</title>
</head>
<body>
  <?php
  include("sidebar.php");
  ?>
  <div id="shell">
  <div class="box">
        <div class="head">
          <h2 style="	font-size:14px; color: white;">Comedy</h2>
          <p class="text-right"><a href="#">View all</a></p>
        </div>
        <?php
      $query = mysqli_query($koneksi, "SELECT * FROM film WHERE id_genre = 3 ;");
      foreach ($query as $q):
    ?>
        <div class="">
          <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            <div class="col mt-4">
              <ul>
                  <a target="_blank" href="sinopsis.php">
                    <img src="<?= "img/film/".$q['poster_film']?>"  alt="">
                  </a>
                  <a target="_blank" href="img2/p3.jpg">
                    <img class="olahraga" src="img2/p3.jpg" alt="Forest" >
                  </a>
                  <a target="_blank" href="img2/p3.jpg">
                    <img class="olahraga" src="img2/p3.jpg" alt="Forest" >
                  </a>
                  <a target="_blank" href="img2/p3.jpg">
                    <img class="olahraga" src="img2/p3.jpg" alt="Forest" >
                  </a>
                  <a target="_blank" href="img2/p3.jpg">
                    <img class="olahraga" src="img2/p3.jpg" alt="Forest" >
                  </a>
                  <a target="_blank" href="img2/p3.jpg">
                    <img class="olahraga" src="img2/p3.jpg" alt="Forest" >
                  </a>
              </ul>

          </div>
        </div>
        <?php
          endforeach;
        ?>
        <div class="cl">&nbsp;</div>
      </div>
href="sinopsis.php"><img src="<?= "img/film/".$q['poster_film']?>"  alt="">


  <div id="footer">
    <p class="lf">Copyright &copy; 2021 <a href="#">Kelompok 2</a> - All Rights Reserved</p>
    <p class="rf">MolaTV</a></p>
    <div style="clear:both;"></div>
  </div>
</div>

<script type="text/javascript">
    // Javascrip bootstrap 4 dismissable alert
    $('.alert').alert();

  // Boottrap 4 validation
  (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
</script>

</body>

</html>
</html>
