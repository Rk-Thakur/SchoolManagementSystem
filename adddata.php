

<?php
include_once('admin/config.php');
if(isset($_POST["submit"]))
{

    $a=$_POST['first'];
    $b=$_POST['last'];
    $c=$_POST['email'];
    $d=$_POST['course'];
    $e=$_POST['level'];
    $f=$_POST['status'];

    //create query
    $sql = "INSERT into information(first,last,email,course,level,status) Values('$a','$b','$c','$d','$e','$f')";
    //execute query
    $result=mysqli_query($conn,$sql);
    // check query execution 
    if($result){
        //echo  "datainserted";
        header("Location:home.php");
        
    }
    else{
        echo "datanotinserted".mysqli_error($conn);
    }

}

?>