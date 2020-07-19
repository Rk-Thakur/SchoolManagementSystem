
<?php
include('admin/config.php');
if(isset($_POST["submit"]))
{
    $b=$_POST['name'];
    $c=$_POST['college'];
    $d=$_POST['email'];
    $e=$_POST['reason'];

    //create query
    $sql = "INSERT into status(name,college,email,reason) Values('$b','$c','$d','$e')";
    //execute query
    $result=mysqli_query($conn,$sql);
    // check query execution 
    if($result){
        //echo  "datainserted";
        header("Location:status.php");
    }
    else{
        echo "datanotinserted".mysqli_error($conn);
    }

}

?>