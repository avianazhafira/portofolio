<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <style>
        .row1{
            font-size : 20px;
            color:white;
            font-family: "Times New Roman", Times, serif;
        }
        .img{
            height:350px;
            margin:auto;
            display:block;
        }
     </style>
</head>
<body style="background-color:#336699">
    <?php
        include_once "header.php";
        include_once "koneksi.php";
        //buat sql
        $strSQL = "SELECT * FROM about";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData < 0){
            echo "<tr><td colspan='4'>Data Tidak Terdaftar Dalam Database</td></tr>";
        }
        else{
            while($row = mysqli_fetch_assoc($runStrSQL)){
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 pt-5">
                <img class="img" src="images/<?php echo $row['foto']; ?>">
            </div>
            <div class="col-lg-6 col md-12 about-title" style="color:white;">
                <h1 class="text-uppercase pt-5">
                 <span> About Me </span> 
                </h1>

                <div class="row1 py-4 w-75"> 
                <?php echo $row['deskripsi']?> <br>
                Name            : <?php echo $row['nama']?><br>
                Date of Birth   : <?php echo $row['ttl']?> <br>
                Address         : <?php echo $row['alamat']?> <br>
                Email           : <?php echo $row['email']?> <br>
                Phone           : <?php echo $row['telepon']?>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    }
        include_once "footer.php";
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
</body>
</html>