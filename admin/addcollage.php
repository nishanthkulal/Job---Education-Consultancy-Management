<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true){
  header ('location: adminlogin.php');
  exit;


}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  require_once "../includes/connection.php";
    $clgBid = $_POST["clgBid"];
    $clgname = $_POST["clgname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $branch = $_POST["branch"];
    $availseats = $_POST["availseats"];
    $mineducation = $_POST["mineducation"];
    $sql = "INSERT INTO `colleges` (`clgBid`,`clgname`, `address`, `email`, `branch`, `availseats`, `mineducation`) VALUES ('$clgBid', '$clgname', '$address', '$email',  '$branch','$availseats', '$mineducation');";
    $result = mysqli_query($db, $sql);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <title>add collage </title>
</head>
<body>
  <?php 

require '../partials/addhome.php'?>

  <br>
    <div class="container bg bg-dark card-3 ">
      <br>
    <h2 class="text-center text-white">Enter Collage details</h2>
    <form action="/consltancy/admin/addcollage.php" method="post" >
    <div class="mb-3">
          <label for="clgBid" class="form-label text-white">Collage ID </label>
          <input type="text" class="form-control" id="clgBid" name="clgBid" required>
        </div>
        <div class="mb-3">
          <label for="clgname" class="form-label text-white">Collage name </label>
          <input type="text" class="form-control" id="clgname" name="clgname" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label text-white">Address</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-white">Email</label>
          <input type="email" class="form-control" id="phno" name="email" required>
        </div>
        <div class="mb-3">
          <label for="branch" class="form-label text-white">Branch</label>
          <input type="text" class="form-control" id="branch" name="branch" required>
        </div>
        <div class="mb-3">
          <label for="availseats" class="form-label text-white">Avilable seats</label>
          <input type="text" class="form-control" id="availseats" name="availseats" required>
        </div>
        <div class="mb-3">
          <label for="mineducation" class="form-label text-white">MinimumEducation</label>
          <textarea name="mineducation" id="mineducation" class="form-control" cols="30" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br>
    </div> 
    
</body>
</html>