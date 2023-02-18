<?php 
// include('header.php');
if(isset($_GET['a_id']))
{
	include('conn.php');
	$id = $_GET['a_id'];
	// echo $id;
	$query = "select * from sofa_tbl where id = '$id'";
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
		.lks 
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
		.lks a 
		{
			color: #16A085;
			text-decoration: none;
			margin: 30px;
			border: 1px solid #73C6B6;
			padding: 7px 16px;
			border-radius: 3px;
			font-weight: bold;
		}
		.lks a:hover
		{
			padding: 8px 17px;
			transition: .3s;
		}
		.upp 
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
		.upp form 
		{
			text-align: center;
			justify-content: center;
			align-items: center;
			background-color: none;
		}
		.upp form input,
		.upp form select  
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
		.upp form input:focus,
		.upp form select:focus
		{
			width: 45%;
			outline: none;
		}
		.upp form p 
		{
			font-size: 18px;
			font-weight: bold;
			margin-top: 20px;
			color: #16A085;
		}
		.upp form input[type='file']
		{
			text-decoration: none;
			border: none;
			margin-left: 20px;
		}
		.upp form input[type='submit']
		{
			border: none;
			background-color: #16A085;
			color: #fff;
			width: 80px;
		}
		
	</style>
</head>
<body>
			<div class="lks">
				<a href="sofa_table.php">Back</a>
				<a href="sofa_insert.php">Insert</a>
				<a href="sofa_table.php">Delete</a>
				<a href="sofa_table.php">View</a>
		  </div>

			<div class="upp">
				<form method="post" action="update_sofa.php" class="form-control" enctype="multipart/form-data">
						<p>Title:</p>
			          <input class="form-control" type="text" name="sofa_title" value="<?php echo $row['Title'];?>">

						<p>Size:</p>
								<select name="sofa_size" class="form-control">
									<option value="", disabled selected>Select Size</option>
									<option value="30″ x 45″"<?php if($row['Size']=='30″ x 45″'){?>selected<?php } ?>>30″ x 45″</option>
									<option value="48″ x 72″"<?php if($row['Size']=='48″ x 72″'){?>selected<?php } ?>>48″ x 72″</option>
									<option value="76″ x 80″"<?php if($row['Size']=='76″ x 80″'){?>selected<?php } ?>>76″ x 80″</option>
								</select>

						<p>Color:</p>
								<select name="sofa_color" class="form-control">
									<option value="", disabled selected>Select Color</option>
									<option value="Green" <?php if($row['Color']=='Green'){?>selected<?php } ?>>Green</option>
									<option value="Brown" <?php if($row['Color']=='Brown'){?>selected<?php } ?>>Brown</option>
									<option value="White"<?php if($row['Color']=='White'){?>selected<?php } ?>>White</option>
									<option value="Blue"<?php if($row['Color']=='Blue'){?>selected<?php } ?>>Blue</option>
								</select>

						<p>Weight:</p>
								<input class="form-control" type="text" name="sofa_weight" value="<?php echo $row['Weight'];?>">

						<p>Seat:</p>
								<input class="form-control" type="text" name="sofa_seat" value="<?php echo $row['Seat'];?>">
						
						<p>Type:</p>
								<select name="sofa_type" class="form-control">
									<option value="", disabled selected>Select Type</option>
									<option value="Armchair Sofa" <?php if($row['Type']=='Armchair Sofa'){?>selected<?php } ?>>Armchair Sofa</option>
									<option value="Loveseat Sofa" <?php if($row['Type']=='Loveseat Sofa'){?>selected<?php } ?>>Loveseat Sofa</option>
									<option value="Sectional/Modular Sofa"<?php if($row['Type']=='Sectional/Modular Sofa'){?>selected<?php } ?>>Sectional/Modular Sofa</option>
								</select>

						<p>Stock:</p>
								<input class="form-control" type="text" name="sofa_stock" value="<?php echo $row['Stock'];?>">
						
			      		<p>Previous image:
								<img src="<?php echo $row['Image']; ?>" height="80px" width="100px"style="border-radius:3px; margin-left: 20px;"></p>
						
						<p>New image:<input type="file" name="img_" value="<?php echo $row['Image'];?>"></p>

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
