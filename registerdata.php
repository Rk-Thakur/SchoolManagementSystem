
<?php
include('admin/config.php');
if(isset($_POST["submit"]))
{
    
    $a=$_POST['first'];
    $b=$_POST['last'];
    $c=$_POST['email'];
    $d=$_POST['password'];
    //create query
    $sql = "INSERT into register(first,last,email,password) Values('$a','$b','$c','$d')";
    //execute query
    $result=mysqli_query($conn,$sql);
    // check query execution 
    if($result){
        //echo  "datainserted";
        header("Location: login.html");
    }
    else{
        echo "datanotinserted".mysqli_error($conn);
    }

}

?>