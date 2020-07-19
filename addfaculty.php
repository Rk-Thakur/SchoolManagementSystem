
<?php
include('admin/config.php');
if(isset($_POST["submit"]))
{
    $a=$_POST['facultyid'];
    $b=$_POST['name'];
    $c=$_POST['subject'];
    $d=$_POST['semester'];

    //create query
    $sql = "INSERT into faculty(facultyid,name,subject,semester) Values('$a','$b','$c','$d')";
    //execute query
    $result=mysqli_query($conn,$sql);
    // check query execution 
    if($result){
        //echo  "datainserted";
        header("Location:faculty.php");
    }
    else{
        echo "datanotinserted".mysqli_error($conn);
    }

}

?>