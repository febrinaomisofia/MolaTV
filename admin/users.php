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
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="css/users.js"></script>

</body>
</html>
