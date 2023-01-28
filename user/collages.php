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

require '../partials/userhome.php'?>
    <div class="container">
<table class=" table table-striped table-dark text-center">
    <h2 class="text-center">ADMISSION OPEN</h2>
  <thead>
    <tr>
    <th scope="col">Collage ID </th>
      <th scope="col">Collage name </th>
      <th scope="col ">Address</th>
      <th scope="col ">Emaile</th>
      <th scope="col">Branch </th>
      <th scope="col ">Availseats</th>
      <th scope="col">Minimum education</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <td class="text-center" ><?php echo $row['clgBid']; ?></td>
         <td class="text-center" ><?php echo $row['clgname']; ?></td>
        <td class="text-center" ><?php echo $row['address']; ?></td>
       <td class="text-center"><?php echo $row['email']; ?></td>
       <td class="text-center" ><?php echo $row['branch']; ?></td>
       <td class="text-center"><?php echo $row['availseats']; ?></td>
       <td class="text-center"><?php echo $row['mineducation']; ?></td>
        <tr></tr>

        <?php
        }
        
        
        ?>
</tr>

  </tbody>
 

</table>
<button type="button"  class="btn btn-dark "> <a href="/consltancy/user/colgrqst.php" style="text-decoration : none ;" class="text-white"> Request </a></button>
</div>
<div class="mx-4">

</div>
</body>
</html>