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
          <h2><b>Data User</b></h2>
        </div>
        <div class="col-sm-6">
          <!-- <a href="#adddataModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah User</span></a>
          <a href="#deletedataModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Hapus</span></a> -->
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>User ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>No Telp</th>
          <th>Paket</th>
          <th>Aksi</th>
        </tr>
      </thead>
        <?php $query = mysqli_query($koneksi, "SELECT * FROM user a, paket b WHERE a.id_paket = b.id_paket"); ?>
        <?php $user_id = 1;?>
        <?php foreach ($query as $pecah) : ?>
      <tbody>
        <tr>
					<td><?php echo $pecah['user_id']; ?></td>
          <td><?php echo $pecah['username']; ?></td>
          <td><?php echo $pecah['email']; ?></td>
          <td><?php echo $pecah['date_of_birth']; ?></td>
          <td><?php echo $pecah['gender']; ?></td>
          <td><?php echo $pecah['phone_number']; ?></td>
          <td><?php echo $pecah['paket']; ?></td>
          <td>
            <!-- <a data-target="#editdataModal" id="editdataModal class="edit" id="editdata" data-toggle="modal" data-id="<?= $pecah['user_id'];?>" 
            data-user="<?= $pecah['username'];?>" data-emaill="<?= $pecah['email'];?>" data-date="<?= $pecah['date_of_birth'];?>"
            data-genderr="<?= $pecah['gender'];?>" data-phone="<?= $pecah['phone_number '];?>" data-pakett="<?= $pecah['paket'];?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
             -->
            
            <a href="function/hapususer.php?id=<?php echo $pecah['id_user'];?>" onclick="return confirm('Apakah yakin ingin menghapus?'"  class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
      </tbody>
      <?php $user_id++; ?>
			<?php endforeach; ?>

    </table>
    <div class="clearfix">
      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
      <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item active"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
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
          <h4 class="modal-title">Add User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>User ID</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Paket</label>
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
      <form action="edituser.php" method="post">
      <input type="hidden" name="user_id" id="user_id">
        <div class="modal-header">
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="number" class="form-control" name="user_id" id="user_id" required>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="date_of_birth">Tanggal Lahir</label>
            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required>
          </div>
          <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <input type="gender" class="form-control" name="gender" id="gender" required>
          </div>
          <div class="form-group">
            <label for="phone_number">No Telp</label>
            <input type="number" class="form-control" name="phone_number" id="phone_number" required>
          </div>
          <div class="form-group">
            <label for="paket">Paket</label>
            <input type="text" class="form-control" name="paket" id="paket"required>
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
          <h4 class="modal-title">Hapus User</h4>
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

