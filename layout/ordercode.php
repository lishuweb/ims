<?php
session_start();
include 'conn.php';
// echo $_SESSION['username'];
// die;
// if(!isset($_SESSION['loginbtn']))
// {
// 	header('Location: login.php');
// }

if(isset($_SESSION['username']))
{
	if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['cnumber']) || empty($_POST['color']) || empty($_POST['productid']) || empty($_POST['date'])) 
	{
		header('location:order.php');
	} 
	else 
	{
		$username = $_POST["username"];  
		$email = $_POST["email"];
		$cnumber = $_POST["cnumber"];
		$date = $_POST["date"];
		$productid = $_POST['productid'];
		$color = $_POST["color"];
		$type = $_POST['type'];
		$sale = 0;
		$quantity = $_POST["quantity"];
		if ($type == 'Foam Mattress' || $type == 'Spring Mattress' || $type == 'Hybrid Mattress') 
		{
			$q1 = "select * from mattress_tbl  where id='" . $productid . "' and Color='" . $color . "'";
			$result = mysqli_query($conn, $q1);
			foreach ($result as $res) 
			{
				$qty = $res['Stock'];
			}
			if ($quantity > $qty)
			{
				echo "Only " . $qty . " quantity left.";
			} 
			else 
			{
				$qr = "insert into order_tbl (Name,Email,Phone,Quantity,Color,Product_id,Type,Date,sold) values ('$username','$email','$cnumber','$quantity','$color','$productid','$type','$date','$sale')";

				$result = mysqli_query($conn, $qr);
				if ($result) 
				{
					$qvv = "update mattress_tbl set Stock = Stock-'$quantity' where id='$productid'";
					$update3_result = mysqli_query($conn, $qvv);
					if ($update3_result) 
					{
						echo 1;
					}
				}
			}
		} 
		else if ($type == 'One Piece Cupboard' || $type == 'Two Piece Cupboard' || $type == 'Three Piece Cupboard') 
		{
			$qee = "select * from cupboard_tbl  where id='" . $productid . "' and Color='" . $color . "'";
			$result = mysqli_query($conn, $qee);
			foreach ($result as $res) 
			{
				$qty = $res['Stock'];
			}
			if ($quantity > $qty) 
			{
				echo "Only " . $qty . " quantity left.";
			} 
			else 
			{
				$que = "insert into order_tbl (Name,Email,Phone,Quantity,Color,Product_id,Type,Date,sold) values ('$username','$email','$cnumber','$quantity','$color','$productid','$type','$date','$sale')";

				$result = mysqli_query($conn, $que);
				if ($result) 
				{
					$qff = "update cupboard_tbl set Stock = Stock-'$quantity' where id='$productid'";
					$update2_result = mysqli_query($conn, $qff);
					if ($update2_result) 
					{
						echo 1;
					}
				}
			}
		} 
		else if ($type == 'Single Bed' || $type == 'Double Bed' || $type == 'King Bed' || $type == 'Queen Bed') 
		{
			$qw = "select * from bed_tbl  where id='" . $productid . "' and Color='" . $color . "'";
			$result = mysqli_query($conn, $qw);
			foreach ($result as $res) 
			{
				$qty = $res['Stock'];
			}
			if ($quantity > $qty) 
			{
				echo "Only " . $qty . " quantity left.";
			} 
			else 
			{
				$quer = "insert into order_tbl (Name,Email,Phone,Quantity,Color,Product_id,Type,Date,sold) values ('$username','$email','$cnumber','$quantity','$color','$productid','$type','$date','$sale')";

				$result = mysqli_query($conn, $quer);
				if ($result) 
				{
					$qtt = "update bed_tbl set Stock = Stock-'$quantity' where id='$productid'";
					$update1_result = mysqli_query($conn, $qtt);
					if ($update1_result) 
					{
						echo 1;
					}
				}
			}
		}
		else 
		{
			$q = "select * from sofa_tbl  where id='" . $productid . "' and Color='" . $color . "'";
			$result = mysqli_query($conn, $q);
			foreach ($result as $res) 
			{
				$qty = $res['Stock'];
			}
			if ($quantity > $qty) 
			{

				echo "Only " . $qty . " quantity left.";
			} 
			else 
			{
				$query = "insert into order_tbl (Name,Email,Phone,Quantity,Color,Product_id,Type,Date,sold) values ('$username','$email','$cnumber','$quantity','$color','$productid','$type','$date','$sale')";
				// print_r($query);
				// die;
				$result = mysqli_query($conn, $query);
				if ($result) 
				{
					$qpp = "update sofa_tbl set Stock = Stock-'$quantity' where id='$productid'";
					$update_result = mysqli_query($conn, $qpp);
					if ($update_result) 
					{
						echo 1;
					}
				}
			}
		}
	}	
}
// else
// {
// 	header("Location:login.php");
// }

