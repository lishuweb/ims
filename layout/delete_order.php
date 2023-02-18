<?php

//session_start();
if(isset($_GET['id']))
{
     include('conn.php');
     $id = $_GET['id'];
     $delete_query = "delete from order_tbl where id='$id'";
     $delete_result = mysqli_query($conn,$delete_query);
     if($delete_result)
     {
          $_SESSION['message'] = 'Order deleted successfully';
          header('location:order_table.php');
     }
     else
     {
          die('Error');
     }
}
else
{
     header('Location:order.php');
}

?>
