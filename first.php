<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
		.full 
		{
			position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
			display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
		}
		.full img 
		{
			height: 100%;
			width: 100%;
			position: relative;
			object-fit: cover;
			opacity: .4;
		}		
		.start 
		{
			height: 250px;
			width: 400px;
			border: 2px solid #AE6D0A;
			position: absolute;
			border-radius: 3px;
			justify-content: center;
			text-align: center;
			align-items: center;
			font-family: 'Poppins', sans-serif;
		}
		.start .start1 
		{
			height: 150px;
			width: 100%;
			margin-top: 40px;
			background-color: red;
		}
	</style>
</head>
<body>
	<div class="full">
		<img src="image/firsts.jpg" height="900px" width="400px">
		<div class="start">
			<h1>Lishu Furniture</h1>
			<div class="start1">
				<a href="home.php">User</a>
				<a href="layout/admin.php">Admin</a>
			</div>
		</div>
	</div>
		
</body>
</html>