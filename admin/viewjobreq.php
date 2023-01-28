<?php
include('../includes/connection.php');
$sql = "SELECT * FROM `candidate`";
$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <title>Job req</title>
</head>
<body>
<?php 

require '../partials/addhome.php'?>
    <div class="container">
<table class="table text-center  table-striped table-dark">
    <h2 class="text-center">JOB requests</h2>
  <thead>
    <tr>
    <th scope="col">Candidate ID</th>
    <th scope="col">Candidate name </th>
      <th scope="col ">Email</th>
      <th scope="col">Phone </th>
      <th scope="col">Company ID </th>
      <th scope="col">Pre-worked-Company</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <td class="text-center" ><?php echo $row['id']; ?></td>
        <td class="text-center" ><?php echo $row['name']; ?></td>
        <td class="text-center" ><?php echo $row['email']; ?></td>
        <td class="text-center" ><?php echo $row['phone']; ?></td>
       <td class="text-center" ><?php echo $row['cID']; ?></td>
       <td class="text-center"><?php echo $row['pricmpny']; ?></td>
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
  $id = $_POST['id'];
  $sql1="DELETE FROM `candidate` WHERE `id`='$id';";
  $result1 = mysqli_query($db,$sql1);
}

?>
<br>
<form action="/consltancy/admin/viewjobreq.php" method="POST" >
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <strong><label for="id" class="col-form-label">Candidate ID </label></strong>
  </div>
  <div class="col-auto">
    <input type="text" name="id" id="id" class="form-control ">
  </div>
  <button type="submit" class="btn btn-success col-auto">Remove</button>
</div>
</form>
</div>
</body>
</html>