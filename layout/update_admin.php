<?php
include 'conn.php';
session_start();
if(isset($_POST['submit']))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $id = $_POST['id'];

    $update_query = "update admin set username = '$username', password = '$password' where id = $id";

    $update_result = mysqli_query($conn,$update_query);

    if($update_query)
    {
        $message = 'Admin data updated successfully';
        $_SESSION['message'] = $message;
        header('Location:info.php');
    }
    else
    {
        $message = 'There was an error';
        header('Location:admin.php');
    }

    }
}
else
    {
        header('Location:admin.php');
    }
?>