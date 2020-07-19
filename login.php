<?php
include('admin/config.php');
if(isset($_POST['submit']))
{
    $name=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($name)&& !empty($password)){

    $sql="SELECT * FROM register where email='$name' and password='$password'";
    //$sql="INSERT into login(email,password) Values('$name','$password')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $row=mysqli_fetch_assoc($result);
        if($row['email']==$name && $row['password']==$password)
        {
            header("Location: home.php");
        }else{
            echo"username and password isnot match".mysqli_error($conn);
           //header("Location: login.html");
        }
    }
    
}else{
    echo "username and password required";
    //header("Location: login.html");
    
}
}