<?php
     include_once "koneksi.php";
     if (isset($_POST['kampus'])) {
        $id = $_POST['id'];
        $kampus= $_POST['kampus'];
        $tahun_kampus = $_POST['tahun_kampus'];
        $des_kampus = $_POST['des_kampus'];
        $major_kampus = $_POST['major_kampus']; 
        $sma = $_POST['sma']; 
        $tahun_sma = $_POST['tahun_sma']; 
        $des_sma = $_POST['des_sma']; 
        $major_sma = $_POST['major_sma'];
        $smp = $_POST['smp']; 
        $tahun_smp = $_POST['tahun_smp']; 
        $des_smp = $_POST['des_smp']; 
        $major_smp = $_POST['major_smp'];

         //buat koneksi
        $strsql = "UPDATE education SET kampus='".$kampus."', tahun_kampus='".$tahun_kampus."', des_kampus='".$des_kampus."', major_kampus='".$major_kampus."', sma='".$sma."', tahun_sma='".$tahun_sma."', des_sma='".$des_sma."' , major_sma='".$major_sma."' , smp='".$smp."' , tahun_smp='".$tahun_smp."' , des_smp='".$des_smp."' , major_smp='".$major_smp."' WHERE id='".$id."' ";
        $runSQL = mysqli_query($conn, $strsql);       
        if ($runSQL) {
            header("location: Aedu.php");
        }  
        else {
            die; //tidak sukses;
        }       
    }    
?>