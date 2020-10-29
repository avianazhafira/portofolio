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
        * {box-sizing: border-box}

        .container {
        width: 100%;
        background-color: #ddd;
        }

        .skills {
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
            color: white;
        }

            .html {width: 90%; background-color: #4CAF50;}
            .css {width: 80%; background-color: #2196F3;}
            .js {width: 65%; background-color: #f44336;}
            .php {width: 60%; background-color: #808080;}

     </style>
</head>
<body style="background-color:#336699">
    <?php
        include_once "header.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col md-12 about-title" style="color:white;">
                <h1 class="text-uppercase pt-5">
                 <span class="center"> Education </span> 
                </h1>

                <div class="row1 py-4 w-75"> 
                <i class="fa fa-graduation-cap" aria-hidden="true">Pembangunan Jaya University</i>
                </div>

                <div class="row1 py-4 w-75"> 
                <i class="fa fa-graduation-cap" aria-hidden="true">Senior High School</i>
                </div>

                <div class="row1 py-4 w-75"> 
                <i class="fa fa-graduation-cap" aria-hidden="true">Junior High School</i>
                </div>

            </div>
            <div class="col-lg-6 col md-12 about-title" style="color:white;">
                <h1 class="text-uppercase pt-5">
                 <span> Skills </span> 
                </h1>
                <p>HTML</p>
                <div class="container">
                <div class="skills html">90%</div>
                </div>

                <p>CSS</p>
                <div class="container">
                <div class="skills css">80%</div>
                </div>

                <p>JavaScript</p>
                <div class="container">
                <div class="skills js">65%</div>
                </div>

                <p>PHP</p>
                <div class="container">
                <div class="skills php">60%</div>
                </div>
            </div>
        </div>
    </div>
    <?php
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