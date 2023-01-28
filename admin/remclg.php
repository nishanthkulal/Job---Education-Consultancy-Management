<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  require_once "../includes/connection.php";
  $id = $_POST['id'];
  $sql2="DELETE FROM `colleges` WHERE `id`='$id';";
  $result1 = mysqli_query($db,$sql2);
  header('location: collegelist.php');
}

?>