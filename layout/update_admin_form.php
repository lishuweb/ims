<?php 
// include('header.php');
if(isset($_GET['a_id']))
{
	include('conn.php');
	$id = $_GET['a_id'];
	echo $id;
	$query = "select * from admin where id = '$id'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
//  print_r($row);
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
			/*float: right;*/
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
					<form method="post" action="update_admin.php" class="form-control">

							Name:
							<input class="form-control" type="text" name="username" value="<?php echo $row['username'];?>">

							Password:
							<input class="form-control" type="text" name="password" value="<?php echo $row['password'];?>">

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
