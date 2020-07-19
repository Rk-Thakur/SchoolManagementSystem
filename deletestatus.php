<?php
include('admin/config.php');
$id=$_REQUEST['id'];
$query="DELETE FROM status WHERE id=$id";
$result=mysqli_query($conn,$query);
header("Location: status.php");
?>