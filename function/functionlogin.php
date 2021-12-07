<?php

include ("include/koneksi.php");

if(isset($_POST['btn-login'])) {
    $username =($_POST['username']);
    $password =($_POST['password']);

    $sql = "SELECT * FROM user WHERE username = '$username' AND user_pass= '$password'";
    $ambil = $koneksi -> query($sql);
    $count = mysqli_num_rows($ambil);
    if($count != 0) {
        while ($row = mysqli_fetch_array($ambil)) {
            $id = $row['user_id'];
            $username = $row['username'];
            $dateofbirth = $row['date_of_birth'];
            $gender = $row['gender'];
            $email = $row['email'];
            $phonenumber = $row['phone_number'];

            $_SESSION['id_user'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            header("location: home.php");
        }
    } else {
        echo
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Email atau sandi salah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
}


/* $sql = "SELECT * FROM user WHERE username = '{$username}' and password = '{$user_pass'";
$query = mysqli_query($koneksi, $sql);
$count = mysqli_num_rows($query);

if(!$query){
    die("Query gagal" .mysqli_error($koneksi));
}
if(!empty($user_login) && (!empty($pass_login))){
    if($count==0){
      echo "<div id='divAlert' name='divAlert' class='alert alert-warning m-2' role='alert'>Cek kembali username dan password anda.</div>";

    }else {
        while ($row=mysqli_fetch_array($query)){
            $id = $row['id'];
            $gambar = $row['gambar'];
            $user = $row['username'];
            $nama = $row['nama'];
            $email = $row['email'];
            $No_Hp = $row['No_Hp'];
            $pass = $row['password'];
            $level = $row['level'];
        }

        if($user_login==$user && $pass_login==$pass){
            header("Location:daftarmenu.php");
            $_SESSION['id'] = $id;
            $_SESSION['gambar'] = $gambar;
            $_SESSION['username'] = $user;
            $_SESSION['nama'] = $nama;
            $_SESSION['email'] = $email;
            $_SESSION['No_Hp'] = $No_Hp;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = $level;


        }else {
          echo "<div id='divAlert' name='divAlert' class='alert alert-warning m-2' role='alert'>Cek kembali username dan password anda.</div>";
        }
    }
}

}


?>
*/
?>
