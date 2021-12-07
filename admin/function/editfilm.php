<?php
    include ("include/koneksi.php");

    $id = $_GET['id'];

    // Simpan input ke dalam variabel
    if (isset($_POST['btn-upl'])) {
        $judul = $_POST['judul_film'];
        $tahun = $_POST['tahun_rilis'];
        $bts_usia = $_POST['batas_usia'];
        $genre = $_POST['genre'];
        $alur = $_POST['alur_film'];
        $artis = $_POST['pemeran_film'];
        $durasi = $_POST['durasi_film'];
        $deskripsi = $_POST['deskripsi_film'];
        $video = $_POST['trailer_film'];
        //$file_tmpVid = "trailer/".basename($_FILES['trailer_film']['name']);

        $upd = mysqli_query($koneksi, "UPDATE film SET judul_film = '$judul', tahun_film = '$tahun', id_batas_usia = '$batas_usia', id_genre = '$genre', alur_film = '$alur', pemeran_film = '$artis', trailer_film = '$video', durasi_film = '$durasi', deskripsi_film = '$deskripsi' WHERE id_film = $id");

        header ("location: movies.php");
    }
?>
