

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="../../assets/css/index.css?v=<?php echo time();?>">

<!-- bootstrap  css link -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- bootstrap js link-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    <title>Document</title>

</head>
<body>


<?php

$servername="localhost";
$username="root";
$password="";
$dbname="user-registration";


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    echo "connection failed";

}
else{

    $query="SELECT * FROM customer";
    $result=mysqli_query($conn,$query);

}

    ?>

<div class="header">
<nav class="navbar navbar-expand-sm navbar-light bg-light ">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Medilab</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#items"><span class="navbar-toggler-icon"></button>
<div class="collapse navbar-collapse" id="items">
<ul class="navbar-nav ms-auto">
  <li class="navbar-item"><a class="navbar-link" href="#">Home</a></li>
  <li class="navbar-item"><a class="navbar-link" href="#">About</a></li>
  <li class="navbar-item"><a class="navbar-link" href="#">Service</a></li>
  <li class="navbar-item"><a class="navbar-link" href="#">Doctor</a></li>
  <li class="navbar-item"><a class="navbar-link" href="#">Contact</a></li>
  <a  href="../employe.php" class="btn btn-success">Back</a>
</ul>
</div>
</nav>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Customer Data Table</h2>
        </div>
    </div>
</div>

<div class="container-fluid ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 mt-5">
     <div class="card">
      <div class="card-header">
    <h5 class="card-title text-center">Fetch Data from Database</h5> 
</div> 
    <div class="card-body">
    <table class="table table-bordered text-center">
        <tr style="background-color:aqua;">
         <td>ID</td>
         <td>Name</td>
         <td>Employe ID</td>
         <td>Warehouse ID</td>
       </tr>


         <tr>

         <?php
         while($row=mysqli_fetch_assoc($result)){
         ?>
        <td><?php echo $row["id"]?></td>
         <td><?php echo $row["name"]?></td>
         <td><?php echo $row["customer_id"]?></td>
         <td><?php echo $row["discount"]?></td>
          
        </tr>
           <?php
         }
         ?>
       


    </table>

  </div>
</div>
            
        </div>
    </div>
</div>



</body>
</html>
