<?php
require '../../databases/koneksi.php';

$id=$_GET['id'];
$sql = "DELETE FROM event WHERE id = '$id'";
$result = mysqli_query($conn,$sql);

    header("location:index.php?hapusBerhasil");

?>