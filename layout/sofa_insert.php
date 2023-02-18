<?php
include('conn.php');

if (isset($_POST['submit'])) 
{
	if (empty($_POST['sofa_title'])||empty($_POST['sofa_size'])||empty($_POST['sofa_color'])||empty($_POST['sofa_weight'])||empty($_POST['sofa_material'])||empty($_POST['sofa_type'])||empty($_POST['sofa_stock'])||empty($_FILES['image'])) 
	{  
	    header('location:sofa_form.php');  
	}
	else
	{ 
		$id=$_POST['id'];
		$sofa_title=$_POST['sofa_title'];
		$sofa_size=$_POST['sofa_size'];
		$sofa_color=$_POST['sofa_color'];
		$sofa_weight=$_POST['sofa_weight'];
		$sofa_material=$_POST['sofa_material'];
		$sofa_type=$_POST['sofa_type'];
		$sofa_stock=$_POST['sofa_stock'];
		
		$image=$_FILES['image']['name'];
		$destination="image/".$image;

		$query = "insert into sofa_tbl (Title,Size,Color,Weight,Seat,Type,Stock,Image) values ('$sofa_title','$sofa_size','$sofa_color','$sofa_weight','$sofa_material','$sofa_type','$sofa_stock','$destination')";
		$result = mysqli_query($conn,$query);
		move_uploaded_file($_FILES['image']['tmp_name'],$destination);

		if($result)
		{
			$message = 'About added Successfully';
			$_SESSION['message'] = $message;
			header("location:sofa_table.php");
		}
		else 
		{
			header("location:sofa_form.php");
		}
	}
}
?>
