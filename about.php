<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
        .row1{
            font-size : 20px;
            color:white;
            font-family: "Times New Roman", Times, serif;
        }
        .img{
            margin:auto;
            display:block;
        }
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
        }

        .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        }
        .title {
        color: grey;
        font-size: 18px;
        }

        button:hover, a:hover {
        opacity: 0.7;
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
                <!-- <img class="img" src="images/<?php echo $row['foto']; ?>"> -->
                <div class="card">
                    <img class="img" src="images/<?php echo $row['foto']; ?>" alt="Aviana" style="width:100%;">
                    <h3><?php echo $row['nama']?></h3>
                    <p class="title">Portfolio</p>
                    <p><a href="contact.php" class="button">Contact</a></p>
                </div>
            
            </div>
            <div class="col-lg-6 col md-12 about-title" style="color:white;">
                <h1 class="text-uppercase pt-5">
                 <span> About Me </span> 
                </h1>

                <div class="row1 py-4 w-75"> 
                <?php echo $row['deskripsi']?> <br><br>
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