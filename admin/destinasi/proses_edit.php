<?php
require '../../databases/koneksi.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $jam_operasional = $_POST['jam_operasional'];
    $tiket_masuk = $_POST['tiket_masuk'];
    $deskripsi = $_POST['deskripsi'];

    // Foto lama dari input hidden
    $fotolama = $_POST['coverlama'];

    // Cek apakah user upload foto baru
    if (!empty($_FILES['cover']['name'])) {

        // Nama file baru
        $fileName = $_FILES['cover']['name'];
        $tmpName  = $_FILES['cover']['tmp_name'];

        $ekstensi = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $newImage = uniqid() . "." . $ekstensi;

        // Upload foto baru
        move_uploaded_file($tmpName, '../../assets/images/destinasi/' . $newImage);

        // Hapus foto lama
        if (file_exists('../../assets/images/destinasi/' . $fotolama)) {
            unlink('../../assets/images/destinasi/' . $fotolama);
        }

    } else {
        // Tidak upload foto → tetap pakai foto lama
        $newImage = $fotolama;
    }

    // Update
    $sqlUpdate = "UPDATE destinasi SET 
                    nama='$nama',  
                    lat='$lat', 
                    lng='$lng', 
                    jam_operasional='$jam_operasional',
                    tiket_masuk='$tiket_masuk', 
                    deskripsi='$deskripsi', 
                    cover='$newImage' 
                  WHERE id='$id'";

    mysqli_query($conn, $sqlUpdate);

    header("Location: index.php?info=updateBerhasil");
}
?>
