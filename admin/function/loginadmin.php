<?php
  include ("../include/koneksi.php");

  if (isset($_POST['btn-login'])) {
    $nama_adm = $_POST['username'];
    $pass_adm = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE admin_name = '$nama_adm' AND admin_pass = '$pass_adm'";
    $query = mysqli_query($koneksi, $sql);
    $count = mysqli_num_rows($query);

  if (!$query) {
    die("Query gagal" .mysqli_error($koneksi));
  }

  if ($count == 0) {
  echo
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Username atau sandi salah</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>';
    } else {
      while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $nama = $row['nama_adm'];
        $pass = $row['pass_adm'];


        $_SESSION['id'] = $id;
        $_SESSION['nama_adm'] = $nama;
        $_SESSION['email_adm'] = $email;
        header("location: index.php");
      }
    }
  }
?>
