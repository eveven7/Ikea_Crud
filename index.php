
<?php
include "./controllers/ItemController.php";
include "./routes.php"; 

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

</head>

<div class="container">
<body style="background-color: <?= $color ?>;">

<div class="col-6">
            <h1 style="text-align: center;"><a href = "index.php" class="text-decoration-none">Ikea exposition management</a></h1>
</div>

            <?php include "./nav.php";?>


<form class="d-flex search" method="get">
            <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
</form>
</div>
</div>


        <div class="row3">
                <div class="col-4"></div>
                <div class="col-4"></div>
               <?php include "./form.php";?>
               <div class="col-4"></div> 
         </div> 
                <div class="row4">
                 <?php include "./filterCategorySort.php";?>
       </div>
            <div class="row7"></div>
      
            <?php include "./table.php";?>

       
 

            <?php include "./footer/footer.php";?>
</body>
</html>

