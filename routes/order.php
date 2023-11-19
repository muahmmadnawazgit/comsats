<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="../assets/css/index.css?v=<?php echo time();?>">

<!-- bootstrap  css link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- bootstrap js link-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    <title>Document</title>

</head>
<body>


<div class="header">
<nav class="navbar navbar-expand-sm navbar-light bg-light ">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Medilab</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#items"><span class="navbar-toggler-icon"></button>
<div class="collapse navbar-collapse" id="items">
<ul class="navbar-nav ms-auto">

  <a  href="second.php" class="btn btn-success">Back</a>
</ul>
</div>
</nav>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Please choose One of these Options:</h2>
        </div>
    </div>
</div>

<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mt-5">
            <a type="button" class="btn btn-danger buttons" href="controllers/add-order.php">Add-Order</a>
             <a type="button" class="btn btn-danger buttons ms-3" href="display/displayorder.php">Display-Order</a>
             <a type="button" class="btn btn-danger buttons ms-3" href="controllers/add-warehouse.php">add-warehouse</a>
 
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mt-5">
            <a type="button" class="btn btn-danger buttons" href="controllers/add-product.php">Add-Products</a>
            <a type="button" class="btn btn-danger buttons ms-3" href="display/displayproduct.php" >Display-Products</a>
            <a type="button" class="btn btn-danger buttons ms-3" href="display/displaywarehouse.php">Display-warehouse</a>
        </div>
    </div>
</div>

</body>
</html>
