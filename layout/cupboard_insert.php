<?php

	$conn=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($conn,'ims_project');

if (isset($_POST['submit'])) 
{
	$id=$_POST['id'];
	$c_title=$_POST['c_title'];
	$c_material=$_POST['c_material'];
	$c_dimension=$_POST['c_dimension'];
	$c_weight=$_POST['c_weight'];
	$c_type=$_POST['c_type'];
	$c_color=$_POST['c_color'];
	$c_stock=$_POST['c_stock'];
	
	$image=$_FILES['image']['name'];
	$destination="image/".$image;

	$query = "insert into cupboard_tbl (Title,Material,Dimensions,Weight,Type,Color,Stock,Image) values ('$c_title','$c_material','$c_dimension','$c_weight','$c_type','$c_color','$c_stock','$destination')";
	$result = mysqli_query($conn,$query);
	move_uploaded_file($_FILES['image']['tmp_name'],$destination);

	if($result)
	{
		$message = 'About added Successfully';
		$_SESSION['message'] = $message;
		header("location:cupboard_table.php");
	}
	else 
	{
		header("location:cupboard_form.php");
	}
}
?>
