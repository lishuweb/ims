<style>
    <?php include 'conn.php';?>
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
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
		    /*background-color: #E8F8F5;*/
		    /*transform: translate(-50px,-50px);*/
		}
		.center-screen 
		{
		  position: fixed;
		  top: 50%;
		  left: 50%;
		  /* bring your own prefixes */
		  transform: translate(-50%, -50%);
		  height: 400px;
		  width: 50%;
		  /*border: 1px  solid green;*/
		  justify-content: center;
		  align-items: center;
		  text-align: center;
		}
		.center-screen h1 
		{
			font-size: 24px;
			font-weight: bold;
			color: #196F3D;
		}
		form
		{
			justify-content: center;
			align-items: center;
			text-align: center;
		}
		form input[type="text"], 
		form input[type="password"]
		{
			border:0;
			background:none;
			display: inline-block;
			width: 40%;
			height: 40px;
			border: none;
			outline: none;
			/*background-color: #ECFEF7;*/
			border-bottom: 2px solid green;
			text-align: center;
			transition: 0.25s;
			margin-top: 20px;
		}
		form input[type="text"]:focus, 
		form input[type="password"]:focus	
		{
			width: 48%;
			/*border-bottom: 2px solid red;*/
			outline: none;
			border-bottom: 2px solid green;
		}
		form input[type="submit"]
		{
			margin-top: 10px;
			height: 50px;
			width: 140px;
			color: white;
			background-color: #137D4D;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			padding: 14px 40px;
			font-family: 'Poppins', sans-serif;
		}
		form input[type="submit"]:hover
		{
			cursor: pointer;
			background-color: #76BCA1;
			color: white;
			transition: .3s;
		}
	</style>
</head>
<body>
			<div class="center-screen">
				<h1>Admin Login</h1>
				<form action="loginadmincode.php" method="post">
					<input id="text1" type="text" name="username" placeholder="Username" required=""><br><br>
					<input id="text1" type="password" name="password" placeholder="Password" required=""><br><br>
					<input type="submit" value="Login" name="submit">
				</form>
			</div>
</body>
</html>