<?php
     include_once "koneksi.php";
     if (isset($_POST['html'])) {
        $id = $_POST['id'];
        $html= $_POST['html'];
        $css = $_POST['css'];
        $php = $_POST['php'];
        $ms = $_POST['ms']; 
        $tm = $_POST['tm']; 
        $ps = $_POST['ps']; 

         //buat koneksi
        $strsql = "UPDATE skills SET html='".$html."', css='".$css."', php='".$php."', ms='".$ms."', tm='".$tm."', ps='".$ps."' WHERE id='".$id."' ";
        $runSQL = mysqli_query($conn, $strsql);       
        if ($runSQL) {
            header("location: Askills.php");
        }  
        else {
            die; //tidak sukses;
        }       
    }    
?>