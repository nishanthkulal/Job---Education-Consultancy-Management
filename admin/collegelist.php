<?php
include('../includes/connection.php');
$sql = "SELECT * FROM `colleges`";
$result = mysqli_query($db,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <title>Collages</title>
</head>
<body>
<?php 

    require '../partials/addhome.php'?>

    <div class="container">
<table class="table  text-center  table-striped table-dark">
    <h2 class="text-center">COLLEGE LIST</h2>
  <thead>
    <tr>
    <th scope="col">Id </th>
    <th scope="col">College name </th>
    <th scope="col">Branch ID </th>
      <th scope="col">Address </th>
      <th scope="col ">Email</th>
      <th scope="col">Branch </th>
      <th scope="col">Available Seats</th>
      <th scope="col">Minimum Education </th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <td class="text-center" ><?php echo $row['id']; ?></td>
        <td class="text-center" ><?php echo $row['clgname']; ?></td>
         <td class="text-center" ><?php echo $row['clgBid']; ?></td>
        <td class="text-center" ><?php echo $row['address']; ?></td>
       <td class="text-center" ><?php echo $row['email']; ?></td>
       <td class="text-center"><?php echo $row['branch']; ?></td>
       <td class="text-center"><?php echo $row['availseats']; ?></td>
       <td class="text-center"><?php echo $row['mineducation']; ?></td>
        <tr></tr>

        <?php
        }
        
        
        ?>
</tr>

  </tbody>
</table>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  require_once "../includes/connection.php";
  $clgBid = $_POST['clgBid'];
  $availseats = $_POST['availseats'];
  // $id = $_POST['id1'];
  $sql1="UPDATE `colleges` SET `availseats`='$availseats' WHERE `clgBid` = '$clgBid';";
  $result1 = mysqli_query($db,$sql1);
  // $sql2="DELETE FROM `colleges` WHERE `id`='$id';";
  // $result1 = mysqli_query($db,$sql2);
}

?>
<br>
<form action="/consltancy/admin/collegelist.php" method="POST" >
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <strong><label for="clgBid" class="col-form-label">Collage ID</label></strong>
  </div>
  <div class="col-auto">
    <input type="text" name="clgBid" id="clgBid" class="form-control ">
  </div>
  <!-- --------------------------  -->

  <div class="col-auto">
    <strong><label for="availseats" class="col-form-label">Available seats</label></strong>
  </div>
  <div class="col-auto">
    <input type="text" name="availseats" id="availseats" class="form-control">
  </div>
  <button type="submit" class="btn btn-success col-auto"> <strong> Submit </strong></button>
</div>
</form>
<br>

<form action="/consltancy/admin/remclg.php" method="POST" >
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <strong><label for="id" class="col-form-label mx-4">ID </label></strong>
  </div>
  <div class="col-auto">
    <input type="text" name="id" id="id" class="form-control ">
  </div>
  <button type="submit" class="btn btn-success col-auto mx-5"> <strong> Remove </strong></button>
</div>
</form>
<br>
</div>
</body>
</html>