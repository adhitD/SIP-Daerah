<?php
require '../../databases/koneksi.php';

// Ambil data dari form
if(isset($_POST['tambah'])){
$nama            = $_POST['nama'];
$lat             = $_POST['lat'];
$lng             = $_POST['lng'];
$jam_operasional = $_POST['jam_operasional'];
$tiket_masuk     = $_POST['tiket_masuk'];
$deskripsi       = $_POST['deskripsi'];

// Proses upload file
$cover = $_FILES['cover']['name'];
$tmp   = $_FILES['cover']['tmp_name'];

// Folder tujuan penyimpanan gambar
$folder = "../../assets/images/destinasi/";

// Buat nama file unik agar tidak bentrok
$namaBaru = time() . '_' . $cover;

// Pindahkan file ke folder
if (move_uploaded_file($tmp, $folder . $namaBaru)) {
    
    // Query insert ke database
    $sql = "INSERT INTO destinasi(nama, lat, lng, jam_operasional, tiket_masuk, deskripsi, cover)
            VALUES ('$nama', '$lat', '$lng', '$jam_operasional', '$tiket_masuk', '$deskripsi', '$namaBaru')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location:index.php?status=berhasil");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }

} else {
    echo "Upload file gagal!";
}
}
?>
