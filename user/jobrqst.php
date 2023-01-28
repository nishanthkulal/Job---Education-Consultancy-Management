<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  require_once "../includes/connection.php";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $cID = $_POST["cID"];
    $pricmpny = $_POST["pricmpny"];
    $sql = "INSERT INTO `candidate` (`name`, `email`, `phone`, `cID`, `pricmpny`) VALUES ('$name', '$email', '$phone',  '$cID', '$pricmpny');";
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
    <title>Job request</title>
</head>
<body>
<?php 

require '../partials/userhome.php'?>
  <br>
    <div class="container bg bg-dark card-3 ">
      <br>
    <h2 class="text-center text-white">Add Candidate details</h2>
    <form action="/consltancy/user/jobrqst.php" method="post" >
        <div class="mb-3">
          <label for="name" class="form-label text-white">Candidate Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-white">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label text-white">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
          <label for="cID" class="form-label text-white">Company ID</label>
          <input type="text" class="form-control" id="cID" name="cID" required>
        </div>
       
        <div class="mb-3">
          <label for="pricmpny" class="form-label text-white">Previous Company</label>
          <textarea name="pricmpny" id="pricmpny" class="form-control" cols="30" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br>
    </div> 
    
</body>
</html>