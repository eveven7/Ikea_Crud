<?php
// $color = "logo.png";
include "./controllers/ItemController.php";
$edit = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(isset($_POST['save'])){
        ItemController::store();
        header("Location: ./index.php");
        die;
    }    

    if(isset($_POST['edit'])){
    
        $item = ItemController::show();
        $edit = true;
    }  

    if(isset($_POST['update'])){
        
        ItemController::update();
        header("Location: ./index.php");
        die;
    }

    if(isset($_POST['destroy'])){
        ItemController::destroy();
        header("Location: ./index.php");
        die;
    }
}

if (isset($_GET['search'])) {
    $item = ItemController::filter();
} else if (isset($_GET['sort'])) {
    $item = ItemController::sort();
} else {
    $item = ItemController::index();
}


$items = ItemController::index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Ikea ekspozicijos sąrašas</title>
    <link rel="stylesheet" href="./css/style.css">


    <!-- 
        <video id="player" autoplay controls>
        <source src="./video.mp3" type="video/mp3">
    </video> -->
    
</head>
<body style="background-color: <?= $color ?>;">
<nav class="navbar navbar-light sticky-top">

<div class="navbar"> 

        <img
            class="demo-bg"
            src="./images/image1.jpg"
            alt=""
        >
    

    <a class="navbar-brand navbar-text" href="./index.php"><img class="logo" src="./images/logo.png"></a>
  
    <a class="navbar navbar-text" href="./index.about.php">  ABOUT US </a>
   
    


</div>


<div class="header">
    <h1 class="highlighted">A WORLD OF INSPIRATION FOR YOUR HOME</h1>
</div>


<form class="d-flex search" method="get">
            <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
</form>
