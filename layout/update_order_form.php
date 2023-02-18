<?php 
// include('header.php');
if(isset($_GET['id']))
{
	include('conn.php');
	$id = $_GET['id'];
	// echo $id;
	$query = "select * from order_tbl where id = '$id'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
// print_r($row);
// die;

	?>

	<!DOCTYPE html>
	<html>
	<head>
  <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css  "> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  

		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Merriweather&family=Poppins:wght@200&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@200&display=swap');
		@import "./fontawesome/scss/fontawesome.scss";
		@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Kdam+Thmor+Pro&family=Koulen&family=Merriweather&family=Poppins:wght@200&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Josefin+Sans:wght@500&family=Kdam+Thmor+Pro&family=Koulen&family=Merriweather:ital@0;1&family=Noto+Serif:wght@700&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap');
		*{
			padding: 0;
			margin: 0;
			text-decoration: none;
			list-style: none;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}

		form 
		{
			height: 900px;
			width: 50%;
			float: right;
			margin-top: 8%;
			background-color: #D1F2EB;
			border-radius: 3px;
			justify-content: center;
			align-items: center;
			text-align: center;
			color: red;
		}
		
		form input
		{
			margin-top: 20px;
			border: 3px solid red;
		}
		form input[type="submit"]
		{
			border: none;
			padding: 7px 13px;
			background-color: #148F77;
			border-radius: 3px;
			color: #fff;
		}
	</style>
</head>
<body>

<div class="container" style="margin-left:2; ">
    
   
	<form method="post" action="update_order.php" class="form-control">
        Name:
            <input class="form-control" type="text" name="username" value="<?php echo $row['Name'];?>">
        Email:
            <input class="form-control" type="text" name="email" value="<?php echo $row['Email'];?>">
        
		
		Contact Number:
		<input class="form-control" type="text" name="cnumber" value="<?php echo $row['Phone'];?>">
		Quantity
		<select name="quantity" class="form-control">
			<option value="", disabled selected>Select Quantity</option>
			<option value="1"<?php if($row['Quantity']==1){?>selected<?php } ?>>1</option>
			<option value="2"<?php if($row['Quantity']==2){?>selected<?php } ?>>2</option>
			<option value="3"<?php if($row['Quantity']==3){?>selected<?php } ?>>3</option>
			<option value="4"<?php if($row['Quantity']==4){?>selected<?php } ?>>4</option>
			<option value="5"<?php if($row['Quantity']==5){?>selected<?php } ?>>5</option>
			<option value="6"<?php if($row['Quantity']==6){?>selected<?php } ?>>6</option>
		</select>
		Color:
		<select name="color" class="form-control">
			<option value="", disabled selected>Select Color</option>
			<option value="Black" <?php if($row['Color']=='Black'){?>selected<?php } ?>>Black</option>
			<option value="White" <?php if($row['Color']=='White'){?>selected<?php } ?>>White</option>
			<option value="Red"<?php if($row['Color']=='Red'){?>selected<?php } ?>>Red</option>
			<option value="Brown"<?php if($row['Color']=='Brown'){?>selected<?php } ?>>Brown</option>
		</select>
		Product_Id:

		<input class="form-control" type="text" name="productid" value="<?php echo $row['Product_id'];?>">
		Date:
		<input type="text" class="form-control" name="date" readonly value="<?php echo $row['Date'];?>">
		<input type="submit" name="submit" value="Update">
		<input type="hidden" name="id" value="<?php echo $id;?>">
	</form>
</table>
</div>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
<?php
} 
 ?>
