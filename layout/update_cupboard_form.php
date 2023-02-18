<?php 
// include('header.php');
if(isset($_GET['a_id']))
{
	include('conn.php');
	$id = $_GET['a_id'];
	// echo $id;
	$query = "select * from cupboard_tbl where id = '$id'";
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
		.lkc 
		{
			height: 100px;
			width: 80%;
			margin-left: auto;
			margin-right: auto;
			margin-top: 50px;
			/*background-color: green;*/
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
		.lkc a 
		{
			color: #16A085;
			text-decoration: none;
			margin: 30px;
			border: 1px solid #73C6B6;
			padding: 7px 16px;
			border-radius: 3px;
			font-weight: bold;
		}
		.lkc a:hover
		{
			padding: 8px 17px;
			transition: .3s;
		}
		.cp 
		{
			margin: auto;
		  width: 50%;
		  /*border: 3px solid #73AD21;*/
		  padding: 10px;
		  margin-top: 3%;
		  /*height: 600px;*/
		  background-color: #73C6B6;
		  border-radius: 6px;
		}
		.cp form 
		{
			text-align: center;
			justify-content: center;
			align-items: center;
			background-color: none;
		}
		.cp form input,
		.cp form select  
		{
			border:0;
	    background:none;
	    display: inline-block;
	    width: 40%;
	    height: 40px;
	    border: none;
	    background-color:none;
	    /*border-bottom: 2px solid green;*/
	    text-align: center;
	    transition: 0.25s;
	    border-radius: 4px;
			border: 1px solid #16A085;
		}
		.cp form input:focus,
		.cp form select:focus
		{
			width: 45%;
			outline: none;
		}
		.cp form p 
		{
			font-size: 18px;
			font-weight: bold;
			margin-top: 20px;
			color: #16A085;
		}
		.cp form input[type='file']
		{
			text-decoration: none;
			border: none;
			margin-left: 20px;
		}
		.cp form input[type='submit']
		{
			border: none;
			background-color: #16A085;
			color: #fff;
			width: 80px;
		}
	</style>
</head>
<body>

		<div class="lkc">
			<a href="bed_table.php">Back</a>
			<a href="bed_form.php">Insert</a>
			<a href="bed_table.php">Delete</a>
			<a href="bed_table.php">View</a>
		</div>

		<div class="cp ">
			<form method="post" action="update_cupboard.php" class="form-control" enctype="multipart/form-data">

		    <p>Title:</p>
		    		<input class="form-control" type="text" name="c_title" value="<?php echo $row['Title'];?>">
		    
		    <p>Material:</p>
						<input class="form-control" type="text" name="c_material" value="<?php echo $row['Material'];?>">
				
				<p>Dimension:</p>
						<input class="form-control" type="text" name="c_dimension" value="<?php echo $row['Dimensions'];?>">
				
				<p>Weight:</p>
						<input class="form-control" type="text" name="c_weight" value="<?php echo $row['Weight'];?>">
				
				<p>Type:</p>
						<select name="c_type" class="form-control">
							<option value="", disabled selected>Select Type</option>
							<option value="One Piece Cupboard"<?php if($row['Type']=='One Piece Cupboard'){?>selected<?php } ?>>One Piece Cupboard</option>
							<option value="Two Piece Cupboard" <?php if($row['Type']=='Two Piece Cupboard'){?>selected<?php } ?>>Two Piece Cupboard</option>
							<option value="Three Piece Cupboard" <?php if($row['Type']=='Three Piece Cupboard'){?>selected<?php } ?>>Three Piece Cupboard</option>
						</select>

				<p>Color:</p>
						<select name="c_color" class="form-control">
							<option value="", disabled selected>Select Color</option>
							<option value="Black"<?php if($row['Color']=='Black'){?>selected<?php } ?>>Black</option>
							<option value="Brown" <?php if($row['Color']=='Brown'){?>selected<?php } ?>>Brown</option>
							<option value="White" <?php if($row['Color']=='White'){?>selected<?php } ?>>White</option>
						</select>
				
				<p>Stock:</p>
						<input class="form-control" type="text" name="c_stock" value="<?php echo $row['Stock'];?>">
				
				<p>Previous image:
						<img src="<?php echo $row['Image']; ?>" height="80px" width="100px"style="border-radius:3px; margin-left: 20px;"></p>

				<p>New image:
						<input type="file" name="img_" value="<?php echo $row['Image'];?>"></p>

					<br>

						<input type="submit" name="submit" value="Update">

						<input type="hidden" name="id" value="<?php echo $id;?>">
			</form>
		</div>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
<?php
} 
 ?>
