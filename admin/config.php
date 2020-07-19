<?php 
$conn=mysqli_connect("localhost","root","","school");
if($conn){
    //echo("database connected sucessfully");
}else{
    echo("database not connected sucessfully").mysqli_error($conn);
}
?>