<?php

	$conn=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'ims_project');

if (isset($_POST['submit'])) 
{
	$id=$_POST['id'];
	$m_title=$_POST['m_title'];
	$m_size=$_POST['m_size'];
	$m_weight=$_POST['m_weight'];
	$m_color=$_POST['m_color'];
	$m_stock=$_POST['m_stock'];
	$m_type=$_POST['m_type'];

	$image=$_FILES['image']['name'];
	$destination="image/".$image;

	$query = "insert into mattress_tbl (Title,Size,Weight,Color,Stock,Type,Image) values ('$m_title','$m_size','$m_weight','$m_color','$m_stock','$m_type','$destination')";
	$result = mysqli_query($conn,$query);
	move_uploaded_file($_FILES['image']['tmp_name'],$destination);

	if($result)
	{
		$message = 'About added Successfully';
		$_SESSION['message'] = $message;
		header("location:mattress_table.php");
	}
	else 
	{
		header("location:mattress_form.php");
	}
}
?>
