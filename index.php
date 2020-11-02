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
        position:relative;
        animation: type 5s steps(20);
        overflow:hidden;
        white-space:nowrap;
        animation-iteration-count: infinite;
        margin:auto;
    }
    @keyframes type {
        0%   {width:0ch;}
        100%  {width:20ch;}
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