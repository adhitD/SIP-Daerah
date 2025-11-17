<?php require '../../databases/koneksi.php';
    if(isset($_POST['tambah'])){
          
        $nama = $_POST['nama'];
        $date = $_POST['tanggal'];
        $lokasi = $_POST['lokasi'];
        $keterangan = $_POST['keterangan'];
    
            
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

    move_uploaded_file($tmpName, '../../assets/images/event/'. $fileBaru);

        $sql=("INSERT INTO event(nama,tanggal,lokasi,keterangan,gambar) VALUES('$nama','$date','$lokasi','$keterangan','$fileBaru' )");
        mysqli_query($conn,$sql);
    }
            header("Location: index.php?info=updateBerhasil");
}
    }
        ?>