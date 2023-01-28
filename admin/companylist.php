<?php
include('../includes/connection.php');
$sql = "SELECT * FROM `companies`";
$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <title>Company</title>
</head>
<body>
<?php 

require '../partials/addhome.php'?>
    <div class="container">
<table class="table text-center  table-striped table-dark">
    <h2 class="text-center">COMPANY LIST</h2>
  <thead>
    <tr>
        <th scope="col">ID </th>
        <th scope="col">Company ID </th>
        <th scope="col">Company name </th>
      <th scope="col ">Address</th>
      <th scope="col">Email </th>
      <th scope="col">Position</th>
      <th scope="col">No of Vacancies</th>
      <th scope="col">Qualification Required</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <td class="text-center" ><?php echo $row['id']; ?></td>
        <td class="text-center" ><?php echo $row['cID']; ?></td>
        <td class="text-center" ><?php echo $row['cname']; ?></td>
        <td class="text-center" ><?php echo $row['address']; ?></td>
       <td class="text-center" ><?php echo $row['email']; ?></td>
       <td class="text-center"><?php echo $row['position']; ?></td>
       <td class="text-center"><?php echo $row['availjobs']; ?></td>
       <td class="text-center"><?php echo $row['qualification_req']; ?></td>
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
  $cID = $_POST['cID'];
  $availjobs = $_POST['availjobs'];
  $sql1="UPDATE `companies` SET `availjobs`='$availjobs' WHERE `cID` = '$cID';";
  $result1 = mysqli_query($db,$sql1);
}

?>
<br>
<form action="/consltancy/admin/companylist.php" method="POST" >
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <strong><label for="cID" class="col-form-label">Company ID</label></strong>
  </div>
  <div class="col-auto">
    <input type="text" name="cID" id="cID" class="form-control ">
  </div>
  <!-- --------------------------  -->

  <div class="col-auto">
    <strong><label for="availjobs" class="col-form-label">Available jobs</label></strong>
  </div>
  <div class="col-auto">
    <input type="text" name="availjobs" id="availjobs" class="form-control">
  </div>
  <button type="submit" class="btn btn-success col-auto"> <strong> Submit </strong></button>
</div>
</form>
<br>
<form action="/consltancy/admin/remcmpny.php" method="POST" >
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
</div>
</body>
</html>