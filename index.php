<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Aviana</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
    .h3 {
        text-align:center;
        color:white;
        margin-top:150px;
        font-family: "Lucida Console", Courier, monospace;
    }
    .h1{
        text-align:center;
        color:white;
        font-size:60px;
        font-family: "Times New Roman", Times, serif;
    }
    .h2{
        text-align:center;
        color:white;
        animation-name: example;
        animation-duration: 4s;
    }
    @keyframes example {
        0%   {left:100px; top:0px;}
        25%  {left:300px; top:0px;}
    }
    </style>
</head>
<body style="background-color:#336699">
    <?php
    include_once "header.php";
    ?>
    <h3 class="h3">Hey! I am </h3>
    <h1 class="h1">Aviana Zhafira Rustandiputri</h1>
    <h2 class="h2">I am College Student</h2>
    
</body>
<?php
    include_once "footer.php"; 
    ?>
</html>