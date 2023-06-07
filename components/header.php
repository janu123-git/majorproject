<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"href="style.css">
    <?php
    
    if(isset($_GET["type"])){
        if($_GET["type"] == "gallery"){
            ?>
               <link rel="stylesheet" href="./gallery.css">
            <?php 
        }else{
            ?>
              <link rel="stylesheet" href="./gallery.css">
            <?Php 
        }
        if($_GET["type"] == "About"){
            ?>
               <link rel="stylesheet" href="./About.css">
            <?php 
        }else{
            ?>
              <link rel="stylesheet" href="./About.css">
            <?Php 
        }
    }
    ?>
    <title>Document</title>
</head>
<body>
