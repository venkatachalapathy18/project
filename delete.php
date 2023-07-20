<?php
include 'connect.php';
if(isset($GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from 'staff' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Deleted successfull";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}