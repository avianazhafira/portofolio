<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body style="background-color:#336699">
    <?php
        include_once "header.php";
        include_once "koneksi.php";

        //buat sql
        $strSQL = "SELECT * FROM skills";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData < 0){
            echo "<tr><td colspan='4'>Data Tidak Terdaftar Dalam Database</td></tr>";
        }
        else{
            while($row = mysqli_fetch_assoc($runStrSQL)){
    ?>
    <style>
        * {box-sizing: border-box}
        
        .skills-title{
            text-align: center;
        }

        .container {
        width: 100%;
        background-color: #ddd;
        }

        .skills {
            text-align: right;
            padding-top: 5px;
            padding-bottom: 5px;
            color: white;
        }

            .html {width: <?php echo $row['html']?>%; background-color: #4CAF50;}
            .css {width: <?php echo $row['css']?>%; background-color: #4CAF50;}
            .php {width: <?php echo $row['php']?>%; background-color: #808080;}
            .ms {width: <?php echo $row['ms']?>%; background-color: #f44336;}
            .tm {width: <?php echo $row['tm']?>%; background-color: #4CAF50;}
            .ps {width: <?php echo $row['ps']?>%; background-color: #2196F3;}
    </style>

            <div class="skills-title" style="color:white;">
                <h1 class="text-uppercase pt-5">
                 <span> Skills </span> 
                </h1>
                <p>HTML</p>
                <div class="container px-0">
                <div class="skills html"><?php echo $row['html']?>%</div>
                </div>

                <p>CSS</p>
                <div class="container px-0">
                <div class="skills css"><?php echo $row['css']?>%</div>
                </div>

                <p>PHP</p>
                <div class="container px-0">
                <div class="skills php"><?php echo $row['php']?>%</div>
                </div>


                <p>Microsoft Word, Excel, Powerpoint</p>
                <div class="container px-0">
                <div class="skills ms"><?php echo $row['ms']?>%</div>
                </div>

                <p>Teamwork</p>
                <div class="container px-0">
                <div class="skills tm"><?php echo $row['tm']?>%</div>
                </div>

                <p>Public Speaking</p>
                <div class="container px-0">
                <div class="skills ps"><?php echo $row['ps']?>%</div>
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