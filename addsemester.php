
<?php
include('admin/config.php');
if(isset($_POST["submit"]))
{
    $b=$_POST['course'];
    $c=$_POST['description'];
    $d=$_POST['semester'];

    //create query
    $sql = "INSERT into semester(course,description,semester) Values('$b','$c','$d')";
    //execute query
    $result=mysqli_query($conn,$sql);
    // check query execution 
    if($result){
        //echo  "datainserted";
        header("Location:semester.php");
    }
    else{
        echo "datanotinserted".mysqli_error($conn);
    }

}

?>