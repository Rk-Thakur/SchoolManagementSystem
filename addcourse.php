<?php
include_once('admin/config.php');
if(isset($_POST["submit"]))
{

    $a=$_POST['number'];
    $b=$_POST['course'];
    $c=$_POST['description'];
   

    //create query
    $sql = "INSERT into course(number,course,description) Values('$a','$b','$c')";
    //execute query
    $result=mysqli_query($conn,$sql);
    // check query execution 
    if($result){
        //echo  "datainserted";
        header("Location:course.php");
        
    }
    else{
        echo "datanotinserted".mysqli_error($conn);
    }

}

?>