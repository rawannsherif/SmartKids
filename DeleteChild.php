<?php
if(isset($_GET['id']))
{
    include('DB.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id='$id'";
    if(mysqli_query($connection,$sql))
    {
        header('location:admin.php');
    }else
    {
        echo 'error' . mysqli_error($connection);
    }
}

?>