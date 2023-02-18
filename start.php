<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
	*{
		position: relative;
		padding: 0;
	    margin: 0;
	    text-decoration: none;
	    list-style: none;
	    box-sizing: border-box;
	    font-family: 'Poppins', sans-serif;
	}
		.container
		{
			height: 200px;
			width: 500px;
			border: 1px solid #1ABC9C;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			position: absolute;
			margin-top: 25%;
			border-radius: 3px;
		}
		h1 
		{
			font-size: 30px;
			font-weight: bold;
			text-align: center;
			margin-top: 20px;
			color: #117864;
		}
		h1:after
		{
		    position: absolute;
		    content: '';
		    height: 2px;
		    bottom: -4px;
		    margin: 0 auto;
		    left: 0;
		    right: 0;
		    width: 5%;
		    background: #117864;
		    -o-transition:.5s;
		    -ms-transition:.5s;
		    -moz-transition:.5s;
		    -webkit-transition:.5s;
		    transition:.5s;
		}
		.lg 
		{
			/*background-color: white;*/
			height: 100px;
			width: 100%;
			margin-top: 4%;
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
		.lg a 
		{
			text-decoration: none;
			color: #fff;
			font-weight: bold;
			font-size: 18px;
			background-color: #148F77;
			padding: 7px 16px;
			border-radius: 3px;
		}
		.lg a:hover
		{
			opacity: .3;
			transition: .3s;
		}
	</style>
</head>
<body>
		<div class="container">
			<h1>Lishu Furniture</h1>
			<div class="lg">
				<a href="layout/signup.php">User</a>
				<a href="layout/loginadmin.php" style="margin-left:50px;">Admin</a>
			</div>
		</div>
</body>
</html>