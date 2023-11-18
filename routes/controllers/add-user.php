<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="../../assets/css/forms.css?v=<?php echo time();?>">

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


if(isset($_POST["submit"])){
$name=mysqli_real_escape_string($conn,$_POST["name"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$city=mysqli_real_escape_string($conn,$_POST["city"]);
$address=mysqli_real_escape_string($conn,$_POST["address"]);
$phone=mysqli_real_escape_string($conn,$_POST["phone"]);

// $cpassword=mysqli_real_escape_string($conn,$_POST["cpassword"]);



  $emailquery="SELECT * FROM users WHERE email='$email'";

  $query=mysqli_query($conn,$emailquery);

  $emailcount=mysqli_num_rows($query);


   if($emailcount > 0){
    ?>
    <script>alert("user already exists");</script>
    <?php
   }
   
   else{

  $phonequery="SELECT * FROM users WHERE phone='$phone'";

  $query=mysqli_query($conn,$phonequery);

  $phonecount=mysqli_num_rows($query);
    
    if($emailcount > 0){
    ?>
    <script>alert("user already exists");</script>
    <?php
   }
   
   else{

    $sql=("INSERT INTO users (name,email,city,address,phone)VALUES('$name','$email','$city','$address','$phone')");

    if($conn->query($sql)){
      
    //  $_SESSION["email"]=$email;
     
          ?>
      <script>alert("user registered successfully");
      document.location.href="add-user.php";
      </script>
     <?php

      $conn->close();
   

    }else{
      ?>
      <script>alert("Error in registerings");
      document.location.href="add-user.php";
      </script>
     <?php
    }
   }
   }

}
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
  <a  href="../second.php" class="btn btn-success">Back</a>
</ul>
</div>
</nav>
</div>

 <section id="appointment" class="appointment section-bg">
      <div class="container">
      
      <div class="section-title">
          <h4>PLEASE FILL INFORMATION</h4>
        </div>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"  class="php-email-form">

          <div class="row">
            <div class="col-md-4 form-group mb-3">
              <input type="text" name="name" class="form-control"  placeholder="Your Name">
            </div>
            </div>


            <div class="row">
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email"  placeholder="Your Email">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="city" class="form-control " placeholder="Enter Your city">
            </div>
            </div>

            <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="address" class="form-control" placeholder="Enter Your address">
            </div>
            </div>
            
            <div class="row">
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone"  placeholder="Your Phone Number">
            </div>
          </div>


          <div class="form-group mt-3">
          <div class="text-center">
            <input class="btn btn-success" type="submit" name="submit">
        </div>
        </form>
      </div>
    </section>
</body>
</html>