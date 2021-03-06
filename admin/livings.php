<?php
  include ("include/koneksi.php");
?>

<?php
include("sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="css/users.css">
    <script src="js/users.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2><b>Data Living</b></h2>
        </div>
        <div class="col-sm-6">
          <a href="#adddataModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Show</span></a>
          <a href="#deletedataModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Hapus</span></a>
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Durasi</th>
          <th>Tahun</th>
          <th>Genre</th>
          <th>Sinopsis</th>
          <th>Trailer</th>
          <th>Cast</th>
          <th>Batas Usia</th>
          <th>Aksi</th>
        </tr>
      </thead>
     
      <?php $query = mysqli_query($koneksi, "SELECT * FROM film a, genre b, batas_usia c 
      WHERE a.id_genre = b.id_genre AND a.id_batas_usia = c.id_batas_usia"); ?>
<!-- SELECT film.judul, film.durasi, film.tahun, genre.genre, film.alur_film, 
film.pemeran_film, film.treiler_film, film.pemeran_film, batas_usia.batas_usia
FROM film JOIN genre ON film.id_genre=genre.id_genre 
JOIN batas_usia ON film.id_batas_usia=batas_usia.id_batas_usia -->

        <?php $no = 1;?>
        <?php foreach ($query as $pecah) : ?>

      <tbody>
        <tr>
          <td><?php echo $no; ?></td>
            <td><?php echo $pecah['judul_film']; ?></td>
            <td><?php echo $pecah['durasi_film']; ?></td>
            <td><?php echo $pecah['tahun_film']; ?></td>
            <td><?php echo $pecah['genre']; ?></td>
            <td><?php echo $pecah['deskripsi_film']; ?></td>
            <td><?php echo $pecah['treiler_film']; ?></td>
            <td><?php echo $pecah['pemeran_film']; ?></td>
            <td><?php echo $pecah['batas_usia']; ?></td>
          <td>
            <a href="#editdataModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deletedataModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
      </tbody>
      <?php $no++; ?>
			<?php endforeach; ?>
    </table>
    <div class="clearfix">
      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
      <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div id="adddataModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Tambah Show</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>No</label>
            <input type="number" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Durasi</label>
            <input type="time" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Sinopsis</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Trailer</label>
            <input type="file" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Cast</label>
            <input type="text" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div id="editdataModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Edit Show</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>No</label>
            <input type="number" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Durasi</label>
            <input type="time" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Sinopsis</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Trailer</label>
            <input type="file" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Cast</label>
            <input type="text" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Delete Modal HTML -->
<div id="deletedataModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Hapus show</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>Apakah kamu yakin untuk menghapus data ini?</p>
          <p class="text-warning"><small>Aksi ini akan menghilangkan data dan tidak bisa dikembalikan</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="css/users.js"></script>

</body>
</html>

</body>
