<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true){
  header ('location: adminlogin.php');
  exit;


}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  require_once "../includes/connection.php";
  $cID = $_POST["cID"];
    $cname = $_POST["cname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $availjobs = $_POST["availjobs"];
    $position = $_POST["position"];
    $qualification_req = $_POST["qualification_req"];
    $sql = "INSERT INTO `companies` (`cID`,`cname`, `address`, `email`, `position`, `availjobs`, `qualification_req`) VALUES ('$cID','$cname', '$address', '$email', '$position', '$availjobs', '$qualification_req');";
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
    <title>add jobs </title>
</head>
<body>
<?php 

require '../partials/addhome.php'?>
  <br>
    <div class="container bg bg-dark card-3 ">
    <h2 class="text-center text-white">Enter Company details</h2>
    <form action="/consltancy/admin/addjobs.php" method="post" >
    <div class="mb-3">
          <label for="cID" class="form-label text-white">Company ID</label>
          <input type="text" class="form-control" id="cID" name="cID" required>
        </div>
        <div class="mb-3">
          <label for="cname" class="form-label text-white">Company Name</label>
          <input type="text" class="form-control" id="cname" name="cname" required>
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
          <label for="position" class="form-label text-white">Position</label>
          <input type="text" class="form-control" id="position" name="position" required>
        </div>
        <div class="mb-3">
          <label for="availjobs" class="form-label text-white">Avilable Jobs</label>
          <input type="text" class="form-control" id="availjobs" name="availjobs" required>
        </div>
        <div class="mb-3">
          <label for="qualification_req" class="form-label text-white">Minimum Education</label>
          <textarea name="qualification_req" id="qualification_req" class="form-control" cols="30" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br>
    </div> 
    
</body>
</html>