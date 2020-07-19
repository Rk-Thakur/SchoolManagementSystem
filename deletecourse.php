<?php
include('admin/config.php');
$id=$_REQUEST['id'];
$query="DELETE FROM course WHERE id=$id";
$result=mysqli_query($conn,$query);
header("Location: home.php");
?>