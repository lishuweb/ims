<?php

//session_start();
if(isset($_GET['a_id']))
{
     include('conn.php');
     $id = $_GET['a_id'];
     $delete_query = "delete from mattress_tbl where id='$id'";
     $delete_result = mysqli_query($conn,$delete_query);
     if($delete_result)
     {
          $_SESSION['message'] = 'Order deleted successfully';
          header('location:mattress_table.php');
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
