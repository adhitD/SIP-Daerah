<?php
require '../../databases/koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];

      $sql = "SELECT gambar FROM event ";
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
        
            move_uploaded_file($tmpName, '../../assets/images/event/'. $newImage);
       
        if (file_exists('../../assets/images/event/' . $fotolama)) {
            unlink('../../assets/images/event/' . $fotolama);
        }

     else {
        // Tidak upload foto → tetap pakai foto lama
        $newImage = $fotolama;
    }

    $sqlUpdate = "UPDATE event SET nama='$nama',  tanggal = '$tanggal', lokasi = '$lokasi', keterangan='$keterangan' , gambar='$newImage' WHERE id= '$id'";
        mysqli_query($conn, $sqlUpdate);
        header("Location: index.php?info=updateBerhasil");

}