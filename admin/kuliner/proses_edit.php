<?php
require '../../databases/koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $bahan = $_POST['bahan'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "SELECT gambar FROM kuliner ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $fotolama = $_POST['gambarlama'];

            $fileName = $_FILES['gambar']['name'];
            $fileSize = $_FILES['gambar']['size'];
            $tmpName = $_FILES['gambar']['tmp_name'];

            $valid = ['jpg', 'jpeg' ,'png'];
            $ekstensi = explode('.',$fileName);
            $ekstensi = strtolower(end($ekstensi));

            $newImage = uniqid();
            $newImage .= '.'.$ekstensi;
        
            move_uploaded_file($tmpName, '../../assets/images/kuliner/'. $newImage);
       
        if (file_exists('../../assets/images/kuliner/' . $fotolama)) {
            unlink('../../assets/images/kuliner/' . $fotolama);
        }

     else {
        // Tidak upload foto → tetap pakai foto lama
        $newImage = $fotolama;
    }

        $sqlUpdate = "UPDATE kuliner SET nama='$nama',  bahan = '$bahan', kategori = '$kategori',deskripsi = '$deskripsi', gambar='$newImage' WHERE id = '$id'";
        mysqli_query($conn, $sqlUpdate);
        header("Location: index.php?info=updateBerhasil");


}

?>