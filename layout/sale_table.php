<?php 

include 'conn.php';
$id = $_POST['id'];
if(isset($_POST['s']))
{
    echo $id;
    $query="UPDATE order_tbl SET sold='1' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    header('Location: order_table.php');
}

?>