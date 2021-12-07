<?php
    if(isset($_POST['btn-daftar'])) {
        $username = strtolower(stripslashes($_POST["username"]));
        $email = strtolower($email);
        $password = md5($_POST["password"]);
        $password = md5($_POST["password"]);


        $sql2 = "INSERT INTO pengguna(nama_user, email_user, pass_user, id_paket) VALUES ('$username', '$email', '$password', '$paket')";
        $berhasil = mysqli_query($koneksi, $sql2);
?>
        <script>
            alert("Registration Succeed!\nTry login into your account");
            window.location.href="index.php"
        </script>
<?php
        header ("location: login.php");
    }
?>
