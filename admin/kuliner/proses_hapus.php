<?php
require '../../databases/koneksi.php';

$id = $_GET['id'];


$sqlSelect = "SELECT gambar FROM kuliner WHERE id = '$id'";
$resultSelect = mysqli_query($conn, $sqlSelect);
$row = mysqli_fetch_assoc($resultSelect);


if ($row) {
    $foto = $row['gambar'];
    $file = "../../assets/images/kuliner/" . $foto;

    
    if (file_exists($file)) {
        unlink($file);
    }
}


$sqlDelete = "DELETE FROM kuliner WHERE id = '$id'";
$resultDelete = mysqli_query($conn, $sqlDelete);


if ($resultDelete) {
    header("Location: index.php?hapusBerhasil");
    exit;
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>
