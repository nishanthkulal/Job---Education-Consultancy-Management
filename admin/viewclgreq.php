<?php
include('../includes/connection.php');
$sql = "SELECT * FROM `student`";
$result = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <title>Collages req</title>
</head>
<body>
<?php 

    require '../partials/addhome.php'?>
    <br>

    <div class="container">
<table class="table  text-center  table-striped table-dark">
    <h2 class="text-center">ADMISSION requests</h2>
  <thead>
    <tr>
      <th scope="col">Student ID </th>
    <th scope="col">Student name </th>
      <th scope="col">Phone </th>
      <th scope="col ">Email</th>
      <th scope="col">Branch </th>
      <th scope="col">PreEeducation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <td class="text-center" ><?php echo $row['sid']; ?></td>
        <td class="text-center" ><?php echo $row['name']; ?></td>
         <td class="text-center" ><?php echo $row['phone']; ?></td>
        <td class="text-center" ><?php echo $row['email']; ?></td>
       <td class="text-center" ><?php echo $row['clgBid']; ?></td>
       <td class="text-center"><?php echo $row['peducation']; ?></td>
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
  $sid = $_POST['sid'];
  $sql1="DELETE FROM `student` WHERE `sid`='$sid';";
  $result1 = mysqli_query($db,$sql1);
}

?>
<br>
<form action="/consltancy/admin/viewclgreq.php" method="POST" >
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <strong><label for="sid" class="col-form-label">Student ID</label></strong>
  </div>
  <div class="col-auto">
    <input type="text" name="sid" id="sid" class="form-control ">
  </div>
  <button type="submit" class="btn btn-success col-auto">Remove</button>
</div>
</form>
</div>
</body>
</html>