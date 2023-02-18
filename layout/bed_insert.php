<?php
include('conn.php');

if (isset($_POST['submit'])) 
{
	if (empty($_POST['bed_title'])||empty($_POST['bed_size'])||empty($_POST['bed_material'])||empty($_POST['bed_color'])||empty($_POST['bed_weight'])||empty($_POST['bed_type'])||empty($_POST['bed_stock'])||empty($_FILES['image'])) 
	{  
	    header('location:bed_form.php');  
	} 
	else 
	{
		$id=$_POST['id'];
		$bed_title=$_POST['bed_title'];
		$bed_size = $_POST['bed_size'];
		$bed_material=$_POST['bed_material'];
		$bed_color=$_POST['bed_color'];
		$bed_weight=$_POST['bed_weight'];
		$bed_type=$_POST['bed_type'];
		$bed_stock=$_POST['bed_stock'];
			
		$image=$_FILES['image']['name'];
		$destination="image/".$image;

		$query = "insert into bed_tbl (Title,Size,Material,Color,Weight,Stock,Image,Type) values ('$bed_title','$bed_size','$bed_material','$bed_color','$bed_weight','$bed_stock','$destination','$bed_type')";
		$result = mysqli_query($conn,$query);
		move_uploaded_file($_FILES['image']['tmp_name'],$destination);

		if($result)
		{
			$message = 'About added Successfully';
			$_SESSION['message'] = $message;
			header("location:bed_table.php");
		}
		else 
		{
			header("location:bed_form.php");
		}
	}
	
}



?>
