<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  require_once "../includes/connection.php";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $clgBid = $_POST["clgBid"];
    $peducation = $_POST["peducation"];
    $sql = "INSERT INTO `student` (`name`, `phone`, `email`, `clgBid`, `peducation`) VALUES ('$name', '$phone', '$email', '$clgBid', '$peducation');";
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
    <title>collage request</title>
</head>
<body>
<?php 

require '../partials/userhome.php'?>
  <br>
    <div class="container bg bg-dark card-3 ">
      <br>
    <h2 class="text-center text-white">Add Student details</h2>
    <form action="/consltancy/user/colgrqst.php" method="post" >
        <div class="mb-3">
          <label for="name" class="form-label text-white">Student Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label text-white">Phone</label>
          <input type="text" class="form-control" id="address" name="phone" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-white">Email</label>
          <input type="email" class="form-control" id="phno" name="email" required>
        </div>
        <div class="mb-3">
          <label for="clgBid" class="form-label text-white">Collage ID</label>
          <input type="text" class="form-control" id="clgBid" name="clgBid" required>
        </div>
        <div class="mb-3">
          <label for="peducation" class="form-label text-white">Previous Education</label>
          <textarea name="peducation" id="peducation" class="form-control" cols="30" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br>
    </div> 
    
</body>
</html>