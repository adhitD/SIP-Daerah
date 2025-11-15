<?php require '../../databases/koneksi.php';
    if(isset($_POST['tambah'])){
          
        $nama = $_POST['nama'];
        $date = $_POST['tanggal'];
        $lokasi = $_POST['lokasi'];
        $keterangan = $_POST['keterangan'];
    
        $sql=("INSERT INTO event(nama,tanggal,lokasi,keterangan) VALUES('$nama','$date','$lokasi','$keterangan')");
        mysqli_query($conn,$sql);
    }
            header("Location: index.php?info=updateBerhasil");

        ?>