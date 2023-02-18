<?php

//session_start();
if(isset($_GET['id']))
{
     include('conn.php');
     $id = $_GET['id'];
     $delete_query = "delete from user_tbl where id='$id'";
     $delete_result = mysqli_query($conn,$delete_query);
     if($delete_result)
     {
          $_SESSION['message'] = 'User deleted successfully';
          header('location:user.php');
     }
     else
     {
          die('Error');
     }
}
else
{
     header('Location:admin.php');
}

?>
