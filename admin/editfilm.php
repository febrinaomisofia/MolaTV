<?php
  include ("../include/koneksi.php");

  $id = $_GET['id'];

  $query = mysqli_query($koneksi, "SELECT * FROM film  WHERE id_film = $id");
  $pecah = mysqli_fetch_array($query);

?>

<?php
include("sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOLA</title>
    <link rel="stylesheet" href="css/edit.css">
    <script src="js/users.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
</head>
<body>

<!-- Edit Modal HTML -->
<div class="container mt-3">
      <div class="bg-card w-75 mb-5">
          <div class="card-header"><strong><h4>Edit Film</h4></strong></div>
      </div>
      <form action="function/functioneditfilm.php?id=<?=$id?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
          <div class="row">
              <div class="col-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Judul Film</label>
                      <div class="col-sm-9">
                          <input class="form-control" type="text" name="judul_film" value="<?php echo $pecah['judul_film']; ?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Tahun Rilis</label>
                      <div class="col-sm-9">
                          <input class="form-control" type="text" name="tahun_rilis" value="<?php echo $pecah['tahun_film']; ?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Batas Usia</label>
                      <div class="col-sm-9 aa">
                          <select class="form-control" name="batas_usia" required>
                              <option value="" hidden>Pilih Batas Usia</option>
                                  <?php
                                      $optionB = "SELECT * FROM batas_usia";
                                      $queryB = mysqli_query($koneksi, $optionB);
                                      while ($rowB = mysqli_fetch_array($queryB)) {
                                  ?>
                                          <option value="<?= $rowB['id_batas_usia'] ?>"><?= $rowB['batas_usia'] ?></option>
                                  <?php
                                      }
                                  ?>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Genre</label>
                      <div class="col-sm-9 aa">
                          <select class="form-control" name="genre" required="">
                              <option value="" hidden>Pilih Genre</option >
                                  <?php
                                      $optionG = "SELECT * FROM genre";
                                      $queryG = mysqli_query($koneksi, $optionG);
                                      while ($rowG = mysqli_fetch_array($queryG)) {
                                  ?>
                                          <option value="<?= $rowG['id_genre'] ?>"><?= $rowG['genre'] ?></option>
                                  <?php
                                      }
                                  ?>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Alur</label>
                      <div class="col-sm-9">
                          <input class="form-control" type="text" name="alur_film" value="<?php echo $pecah['alur_film']; ?>" required>
                      </div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Pemeran</label>
                      <div class="col-sm-9">
                          <input class="form-control" type="text" name="pemeran_film" value="<?php echo $pecah['pemeran_film']; ?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Durasi</label>
                      <div class="col-sm-9">
                          <input class="form-control" type="text" name="durasi_film" value="<?php echo $pecah['durasi_film']; ?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Deskripsi</label>
                      <div class="col-sm-9">
                          <input class="form-control" type="text" name="deskripsi_film" value="<?php echo $pecah['deskripsi_film']; ?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Trailer</label>
                      <div class="col-sm-9">
                          <input class="form-control" type="link" name="trailer_film" value="<?php echo $pecah['treiler_film']; ?>">
                      </div>
                  </div>
                  <button class="btn float-right mt-3 mb-3" type="submit" name="btn-upl" >Simpan</button>
              </div>
          </div>
      </form>
  </div>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="css/users.js"></script>

</body>
</html>

</body>
