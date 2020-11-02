<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
     <style>
     * {box-sizing: border-box}

        .row1{
            font-size : 20px;
            color:white;
            font-family: "Times New Roman", Times, serif;
        }

        .text-uppercase{
            margin: 280px 100px;
            color:white;
            font-size:80px;
            -webkit-animation: text-uppercase 1s ease-in-out infinite alternate;
            -moz-animation: text-uppercase 1s ease-in-out infinite alternate;
            animation: text-uppercase 1s ease-in-out infinite alternate;
        }
        @-webkit-keyframes text-uppercase {
        from {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #52595D, 0 0 40px #52595D, 0 0 50px #52595D, 0 0 60px #52595D, 0 0 70px #52595D;
        }
        
        to {
            text-shadow: 0 0 20px #fff, 0 0 30px #52595D, 0 0 40px #52595D, 0 0 50px #52595D, 0 0 60px #52595D, 0 0 70px #52595D, 0 0 80px #52595D;
        }
        }
     </style>
</head>
<body style="background-color:#336699">
    <?php
        include_once "header.php";
        include_once "koneksi.php";
        //buat sql
        $strSQL = "SELECT * FROM education";
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
            <div class="col-lg-6 col-md-12">
                <h1 class="text-uppercase pt-5">
                 <span> Education </span> 
                </h1>
            </div>
            <div class="col-lg-6 col-md-12 pt-5">
                <div class="row1"> 
                <i class="fa fa-graduation-cap" aria-hidden="true"><?php echo $row['kampus']?> | <?php echo $row['tahun_kampus']?></i>
                <p style="margin-left:25px">
                <?php echo $row['des_kampus']?> <br>
                Major : <?php echo $row['major_kampus']?> 
                </p>
                <hr>
                </div>

                <div class="row1"> 
                <i class="fa fa-graduation-cap" aria-hidden="true"><?php echo $row['sma']?> | <?php echo $row['tahun_sma']?></i>
                <p style="margin-left:25px">
                <?php echo $row['des_sma']?> <br>
                Major : <?php echo $row['major_sma']?> 
                </p>
                <hr>
                </div>

                <div class="row1"> 
                <i class="fa fa-graduation-cap" aria-hidden="true"><?php echo $row['smp']?> | <?php echo $row['tahun_smp']?></i>
                <p style="margin-left:25px">
                <?php echo $row['des_smp']?> <br>
                Major : <?php echo $row['major_smp']?>
                </p>
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