<?php
     include_once "koneksi.php";
     if (isset($_POST['ex1'])) {
        $id = $_POST['id'];
        $ex1= $_POST['ex1'];
        $des1 = $_POST['des1'];
        $gambar1 = $_POST['gambar1'];
        $ex2 = $_POST['ex2']; 
        $sma = $_POST['sma']; 
        $gambar2 = $_POST['gambar2']; 
        $ex3 = $_POST['ex3']; 
        $des3 = $_POST['des3'];
        $gambar3 = $_POST['gambar3']; 
        $ex4 = $_POST['ex4']; 
        $des4 = $_POST['des4']; 
        $gambar4 = $_POST['gambar4'];

         //buat koneksi
        $strsql = "UPDATE experience SET ex1='".$ex1."', des1='".$des1."', gambar1='".$gambar1."', ex2='".$ex2."', sma='".$sma."', gambar2='".$gambar2."', ex3='".$ex3."' , des3='".$des3."' , gambar3='".$gambar3."' , ex4='".$ex4."' , des4='".$des4."' , gambar4='".$gambar4."' WHERE id='".$id."' ";
        $runSQL = mysqli_query($conn, $strsql);       
        if ($runSQL) {
            header("location: Aexperience.php");
        }  
        else {
            die; //tidak sukses;
        }       
    }    
?>