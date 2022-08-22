<?php
    include 'koneksi.php';
    $email=$_POST['email'];
    $nama=$_POST['nama'];
    $pesan=$_POST['pesan'];

    $query=mysqli_query($koneksi, "INSERT INTO pesan(email, nama, pesan) VALUES('$email', '$nama', '$pesan')")
    or die(mysqli_error($koneksi));
    
    if($query){
        header("Location: index.php");
    }else{
        echo"Gagal";
    }
    ?>