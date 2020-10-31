<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        .experience{
            border: 1px solid black;
            padding: 25px 10px;
            background-color: white;
        }
    </style>

</head>
<body style="background-color:#336699">
    <?php
        include_once "header.php";
        include_once "koneksi.php";
        //buat sql
        $strSQL = "SELECT * FROM experience";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData < 0){
            echo "<tr><td colspan='4'>Data Tidak Terdaftar Dalam Database</td></tr>";
        }
        else{
            while($row = mysqli_fetch_assoc($runStrSQL)){
    ?>
    <div class="container experience-area">
                <div class="row">
                    <div class="col-lg-12 text-center experience-title">
                        <h1 class="text-uppercase title-text py-5">Experience</h1>
                    </div>
                </div>
                <div class="container experience-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="experience">
                                <div class="experience-img text-center py-4">
                                    <img src="images/<?php echo $row['gambar1']?>" alt="experience-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto"><?php echo $row['ex1']?></h5>
                                    <p class="card-text text-secondary">
                                    <?php echo $row['des1']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="experience">
                                <div class="experience-img text-center py-4">
                                    <img src="images/<?php echo $row['gambar2']?>" alt="experience-2">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto"><?php echo $row['ex2']?></h5>
                                    <p class="card-text text-secondary">
                                    <?php echo $row['des2']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="experience">
                                <div class="experience-img text-center py-4">
                                    <img src="images/<?php echo $row['gambar3']?>" alt="experience-3">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto"><?php echo $row['ex3']?></h5>
                                    <p class="card-text text-secondary">
                                    <?php echo $row['des3']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="experience">
                                <div class="experience-img text-center py-4">
                                    <img src="images/<?php echo $row['gambar4']?>" alt="experience-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto"><?php echo $row['ex4']?></h5>
                                    <p class="card-text text-secondary">
                                    <?php echo $row['des4']?>
                                    </p>
                                </div>
                            </div>
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