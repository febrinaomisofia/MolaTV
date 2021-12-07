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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sinopsis.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"
          integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Movie page</title>
  </head>
  <body>
  <?php
  include("sidebarsinopsis.php");
  ?>
    <section class="tv-content">
      <?php
      $query = mysqli_query($koneksi, "SELECT * FROM film");
      foreach ($query as $q):
      ?>
      <div class="tv-content">
        <?php
                $id_film = $q['id_film'];
                $detfilm = mysqli_query($koneksi, "SELECT * FROM film a, genre b, batas_usia c WHERE id_film = $id_film AND a.id_genre = b.id_genre AND a.id_batas_usia = c.id_batas_usia");
                          foreach ($detfilm as $film) {
              ?>
        <div class="content">
          <div class="image">
            <img class="card-img-top" src=">" alt="Card image cap">
          </div>
          <div class="info">
            <div class="title">
              <a1 href="#">
                <h2><?= $film['judul_film'] ?></h2>
              </a1>
            </div>
            <div class="meta-actions">
              <!-- <div class="score">
                <!-- <div class="percentage-circle">
                  <div class="percentage-circle-stroke">
                    <div class="percent">
                      <span>0<sup>%</sup>
                      </span>
                    </div>
                  </div>
                </div>
                <h1>User
                  <br>
                  Score</h1>
              </div>
              <ul>
                <li class="add-to-list">
                  <a1 href= "#">
                  <div class="tooltip"><i class="fas fa-list fa-2x"></i>
                    <span class="tooltiptext">Add to List</span>
                  </div></a1>
                </li> -->
                <li class="favorite">
                  <a1 href= "#">
                  <!-- <div class="tooltip"><i class="fas fa-heart fa-2x"></i> -->
                    <a href="add_favorite.php?id=<?=$id?>&id_cont=<?=$film['id_film']?>" class="modal__btn" style="color: white;">
                          <ion-icon name="add"></ion-icon>
                    <span class="tooltiptext">Favorite</span>
                  </div></a1>
                </li>
                <li class="add-to-watchlist">
                  <a1 href= "#">
                  <div class="tooltip"><i class="fas fa-bookmark fa-2x"></i>
                  <span class="tooltiptext">Add to Watchlist</span>
                  </div></a1>
                </li>
                <li class="play-trailer">
                <a1 href="#">
                <div class="tooltip"><i class="fas fa-play fa-2x"></i>
                <span class="tooltiptext">Play</span>
                  </div></a1>
                </li>
              </ul>
            </div>
            <div class="about">
              <div class="overview">
                <h3>Overview</h3>
                <p1>After the devastating events of Avengers: Infinity War, the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos' actions and restore order to the universe once and for all, no matter what consequences may be in store.</p>
              </div>
              <div class="featured-crew">
                <h3>Cast:</h3>
                <ul>
                  <li>
                    <p1>
                      <a1 href="#">Robert Downey Jr.</a1>
                    <h5>Actor</h5>
                  </p1>
                </li>
          </ul>
      </div>
      </div>
    </div>
      <?php
                  }
      ?>
    </div>
  </div>
  <?php
      endforeach;
    ?>
</div>
</section>
</body>
</html>
<!-- partial -->

</body>
</html>
