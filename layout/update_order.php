<?php
include 'conn.php';
session_start();
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$cnumber = $_POST['cnumber'];
	$quantity = $_POST['quantity'];
	$color = $_POST['color'];
	$productid = $_POST['productid'];
	$date = $_POST['date'];
	$id = $_POST['id'];
	//$db = mysqli_select_db($conn,'ims_project');

	$update_query = "update order_tbl set Name = '$username',Email  = '$email',
	Phone = '$cnumber',Quantity = '$quantity',Color = '$color',Product_id = '$productid',Date = '$date' where id = $id";
	$update_result = mysqli_query($conn,$update_query);

	if($update_query)
	{
		$message = 'Category updated successfully';
		$_SESSION['message'] = $message;
		header('Location:order_table.php');
	}
	else
	{
		$message = 'There was an error';
		header('Location:admin.php');
	}

	}
else
	{
		header('Location:admin.php');
	}
