<?php
include('./config.php');
include('./header.php');
if(isset($_GET['bd_id']))
{
    $id = $_GET['bd_id'];
    $sql = "delete from blood_donor where bd_id = '$id'";
    $rs = mysqli_query($con,$sql);
    if($rs)
    {
        header('location:index.php');
    }else 
    {
        header('eror.php');
    }
}

?>