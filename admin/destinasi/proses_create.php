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

if($_FILES['cover']['error'] === 4){
echo "<script>alert ('gambar tidak ditemukan');</script>";
}
else{

$fileName = $_FILES['cover']['name'];
$fileSize = $_FILES['cover']['size'];
$tmpName =  $_FILES['cover']['tmp_name'];

$valid = ['jpg', 'jpeg' ,'png'];
$imageExtension = explode('.',$fileName);
$imageExtension = strtolower(end($imageExtension));
if(!in_array($imageExtension , $valid)){
    echo
    "<script>alert('extension tidak valid')</script>";
}
else if($fileSize > 4000000){
    "<script>alert('gambar terlalu besar')</script>";
}
else{
    $fileBaru = uniqid();
    $fileBaru .= '.'.$imageExtension;

    move_uploaded_file($tmpName, '../../assets/images/destinasi/'. $fileBaru);

    // Query insert ke database
    $sql = "INSERT INTO destinasi(nama, lat, lng, jam_operasional, tiket_masuk, deskripsi, cover)
            VALUES ('$nama', '$lat', '$lng', '$jam_operasional', '$tiket_masuk', '$deskripsi', '$fileBaru')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location:index.php?status=berhasil");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }

} }
}

?>