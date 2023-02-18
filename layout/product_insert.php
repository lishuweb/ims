<?php

	$conn=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'ims_project');

if (isset($_POST['submit'])) 
{
	$id=$_POST['id'];
	$product_title=$_POST['product_title'];
	
	$query = "insert into product_tbl (Product) values ('$product_title')";
	$result = mysqli_query($conn,$query);

	if($result)
	{
		$message = 'About added Successfully';
		$_SESSION['message'] = $message;
		header("location:product_table.php");
	}
	else 
	{
		header("location:product_form.php");
	}
}
?>
