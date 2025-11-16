<?php 
require '../../databases/koneksi.php';
    if(isset($_POST['tambah'])){
          
        $nama = $_POST['nama'];
        $bahan = $_POST['bahan'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
    
if($_FILES['gambar']['error'] === 4){
echo "<script>alert ('gambar tidak ditemukan');</script>";
}
else{

$fileName = $_FILES['gambar']['name'];
$fileSize = $_FILES['gambar']['size'];
$tmpName = $_FILES['gambar']['tmp_name'];

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

    move_uploaded_file($tmpName, '../../assets/images/kuliner/'. $fileBaru);

    $sql=("INSERT INTO kuliner(nama,bahan,kategori,deskripsi,gambar) VALUES('$nama','$bahan','$kategori','$deskripsi','$fileBaru')");
    mysqli_query($conn,$sql);
            header("Location: index.php?info=updateBerhasil");

}
}
    }
?>