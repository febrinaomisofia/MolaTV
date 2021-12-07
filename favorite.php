
  <div class="container-fluid mt-3">
    <h3 style="color: white;">Kesukaan Anda</h3>
    <div class="row d-flex justify-content-center">
    <?php
      $query = mysqli_query($koneksi, "SELECT * FROM favorit a, film b WHERE a.id_user = $id AND a.id_film = b.id_film ORDER BY newest DESC");
      foreach ($query as $q):
    ?>
      <div class=" col-3 mr-4 mb-5 gmbr-utama">
        <a type="button" data-toggle="modal" data-target="#detfilm<?= $q['id_film']; ?>">
          <img src="<?= "img/film/".$q['poster_film']?>"  alt="">
        </a>
      </div>
      <div class="modal fade" id="detfilm<?= $q['id_film']; ?>" role="dialog">
        <div class="modal-dialog modal-dialog-centered" style="background: #221f1f;">
          <div class="modal-content" style="background: #221f1f;">
            <button type="button" class="close m-2" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color: white;">&times;</span>
            </button>
            <div class="modal-body text-left">
            <?php
              $id_film = $q['id_film'];
              $detfilm = mysqli_query($koneksi, "SELECT * FROM film a, genre b, batas_usia c WHERE id_film = $id_film AND a.id_genre = b.id_genre AND a.id_batas_usia = c.id_batas_usia");
                        foreach ($detfilm as $film) {
            ?>
                <div class="card mb-3" style="background: #221f1f; color: white;">
                  <img class="card-img-top" src="<?= "../admin/cover/".$q['poster_film']?>" alt="Card image cap">
                  <div class="card-body">
                    <ul class="modal__btns row">
                      <li>
                        <a class="modal__btn modal__btn--play ml-3">
                          <button ion-button icon-only onclick="location.href='videoId.html';" value="Movie Trailer">
                            <ion-icon name="play"></ion-icon>
                          </button>
                        </a>
                        <a class="modal__btn">
                          <ion-icon name="thumbs-up-outline"></ion-icon>
                          <span class="tool-tip">
                            I like this
                          </span>
                        </a>
                      </li>
                    </ul>
                    <ul class="modal__ratings row">
                      <p class="modal__pg ml-3"><?= $film['batas_usia'] ?></p>
                      <p class="modal__season ml-3"><strong><?= $film['judul_film'] ?></strong></p>
                    </ul>
                    <ul class="modal__categories row">
                      <p class="modal__category ml-3"><?= $film['alur_film'] ?></p>
                    </ul>
                    <p class="card-text"><?= $film['deskripsi_film'] ?></p>
                  </div>
                </div>
            <?php
                        }
            ?>
            </div>
          </div>
        </div>
      </div>
    <?php
      endforeach;
    ?>

    </div>
  </div>
</div>
