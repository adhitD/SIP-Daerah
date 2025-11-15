<?php
require '../../databases/koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];

    $sqlUpdate = "UPDATE event SET nama='$nama',  tanggal = '$tanggal', lokasi = '$lokasi', keterangan='$keterangan' WHERE id= '$id'";
        mysqli_query($conn, $sqlUpdate);
        header("Location: index.php?info=updateBerhasil");

}