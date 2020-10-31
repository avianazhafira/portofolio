<?php
     include_once "koneksi.php";
     if (isset($_POST['nama'])) {
        $id = $_POST['id'];
        $deskripsi= $_POST['deskripsi'];
        $nama = $_POST['nama'];
        $ttl = $_POST['ttl'];
        $alamat = $_POST['alamat']; 
        $email = $_POST['email']; 
        $telepon = $_POST['telepon']; 
        $foto = $_POST['foto']; 

         //buat koneksi
        $strsql = "UPDATE about SET deskripsi='".$deskripsi."', nama='".$nama."', ttl='".$ttl."', alamat='".$alamat."', email='".$email."', telepon='".$telepon."', foto='".$foto."' WHERE id='".$id."' ";
        $runSQL = mysqli_query($conn, $strsql);       
        if ($runSQL) {
            header("location: Aabout.php");
        }  
        else {
            die; //tidak sukses;
        }       
    }    
?>