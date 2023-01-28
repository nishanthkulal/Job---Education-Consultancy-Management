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
    <title>Companies</title>
</head>
<body>
<?php 

require '../partials/userhome.php'?>
    <div class="container">
<table class="table table-striped table-dark text-center">
    <h2 class="text-center">WE ARE HIRING!!</h2>
  <thead>
    <tr>
    <th scope="col">Company ID </th>
      <th scope="col">Company name </th>
      <th scope="col ">Address</th>
      <th scope="col ">Emaile</th>
      <th scope="col">Post</th>
      <th scope="col ">Vacancy</th>
      <th scope="col">Minimum Qualification</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
        
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <td class="text-center" ><?php echo $row['cID']; ?></td>
         <td class="text-center" ><?php echo $row['cname']; ?></td>
        <td class="text-center" ><?php echo $row['address']; ?></td>
       <td class="text-center"><?php echo $row['email']; ?></td>
       <td class="text-center" ><?php echo $row['position']; ?></td>
       <td class="text-center"><?php echo $row['availjobs']; ?></td>
       <td class="text-center"><?php echo $row['qualification_req']; ?></td>
        <tr></tr>

        <?php
        }
        
        
        ?>
</tr>

  </tbody>
 

</table>
<button type="button"  class="btn btn-dark"> <a href="/consltancy/user/jobrqst.php" style="text-decoration : none ;" class="text-white"> Request </a></button>
</div>
<div class="mx-4">

</div>
</body>
</html>