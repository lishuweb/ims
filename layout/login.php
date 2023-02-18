<style>
    <?php include 'css/footer.css';?>
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
		}
		.nav_bar  
		{
		    height: 90px;
		    width: 100%;
		    display: flex;
		    position: fixed;
		    top: 0;
		    z-index: 1;
		    /*margin-top: 10px;*/
		    text-align: center;
		    background-color: #fff;
		    align-items: center;
		    justify-content: center;
		    /*border: 1px solid black;*/
		}
		.nav_bar .logo  
		{
		    height: 100%;
		    width: 200px;
		    /*border: 1px solid black;*/
		}
		.nav_bar .logo img 
		{
		    height: 100%;
		    width: 100%;
		    object-fit: cover;
		}
		.nav_bar .navlist
		{
		    display: flex;
		    position: relative;
		    margin-right: 5%;
		    margin-left: 8%;
		}
		.nav_bar .navlist .navlistitem 
		{
		    list-style: none;
		    font-weight: bold;
		    position: relative;
		    cursor: pointer;
		    line-height: 80px;
		    color: black;
		    margin: 18px;
		}
		.nav_bar a   
		{
		    position: relative;
		    text-decoration: none;
		    color: black;
		    font-size: 20px;
		    padding: 10px 15px;
		    border-radius: 3px;
		    letter-spacing: 0.5px;
		    font-weight: bold;
		}
		.nav_bar .navlist .navlistitem:after
		{
		    content: "";
		    position: absolute;
		    background-color: #BC8F8F;
		    height: 3px;
		    width: 0;
		    left: 0;
		    bottom: -3px;
		    transition: 0.5s;
		}
		.nav_bar .navlist .navlistitem:hover:after
		{
		    width: 100%;
		}
		.nav_bar .but a 
		{
		    background-color: #BC8F8F;
		    color: #fff;
		    font-size: 18px;
		}
		.nav_bar .but a:hover 
		{
		    background-color: #CD6155;
		    transition: .3s;
		}
		
		.text p  
		{
            text-align: center;
            margin-top: 8%;
            font-size: 30px;
        }
		.box 
		{
			/*border: 1px solid black;*/
			margin-top: 3%;
			height: 540px;
			width: 40%;
			margin-left: auto;
			margin-right: auto;
			border-radius: 10px;
			text-align: center;
			justify-content: center;
			background-color: #ECFEF7;
		}
		.box .image 
		{
			display: inline-block;
			/*border: 1px solid black;*/
			height: 150px;
			width: 150px;
			align-items: center;
			justify-content: center;
			margin-top: 6%;
			border-radius: 50%;
			background-color: #ECFEF7;

		}
		.box .image img 
		{
			width: 100%;
			height: 100%;
			object-fit:cover;
			border-radius: 50%;
		}
		.box .forms
		{
			/*border: 1px solid black;*/
			height: 350px;
			width: 60%;
			display: block;
			margin-top: 8%;
			margin-right: auto;
			margin-left: auto;
			justify-content: center;
			align-items: center;
		}
		.forms input[type="email"]
		{
			border:0;
			background:none;
			display: inline-block;
			width: 90%;
			height: 40px;
			border: none;
			background-color: #ECFEF7;
			border-bottom: 2px solid green;
			text-align: center;
			transition: 0.25s;
		}
		.box .forms input[type="text"], input[type="password"]
		{
			border:0;
			background:none;
			display: inline-block;
			width: 90%;
			height: 40px;
			border: none;
			background-color: #ECFEF7;
			border-bottom: 2px solid green;
			text-align: center;
			transition: 0.25s;
		}
		.box .forms input[type="text"]:focus, input[type="password"]:focus,.forms input[type="email"]:focus
		{
			width: 100%;
			/*border-bottom: 2px solid red;*/
			outline: none;
		}
		.box .forms input[type="checkbox"]
		{
			margin-top: 20px;
		}
		.box .forms input[type="submit"]
		{
			margin-top: 10px;
			height: 50px;
			width: 160px;
			color: white;
			background-color: #137D4D;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			padding: 14px 40px;
			font-family: 'Poppins', sans-serif;
		}
		.box .forms input[type="submit"]:hover
		{
			cursor: pointer;
			background-color: #76BCA1;
			color: white;
			transition: .3s;
		}
		.box .forms input[type="checkbox"]
		{
			font-size: 16px;
			font-weight: bold;
			color: black;
		}
		.box .forms a 
		{
			text-decoration: none;
			font-size: 16px;
			font-weight: bold;
			color: black;
		}
		.box .forms a:hover
		{
			color: #C0392B;
		}
		.forms input[type="file"] 
        {
            display: none;
        }
        .forms .custom-file-upload 
        {
            cursor: pointer;
            text-align: center;
            /*background-color: #fff;*/
            color: #000;
            border-radius: 3px;
            margin-left: 30px;
            /*display: block;*/
            /*width: 140px;*/
            /*height: 70px;*/
            font-size: 18px;
            font-weight: bolder;
        }

	</style>
<body>
	
	<div class="nav_bar">

        <div class="logo">
            <a href="home.php"><img src="image/logo.png"></a>
        </div>

        <ul class="navlist"> 
            <li class="navlistitem"><a class="active" href="../home.php">Home</a></li>
            <li class="navlistitem"><a href="../product.php">Products</a></li>
            <li class="navlistitem"><a href="../aboutus.php">About Us</a></li>
            <li class="navlistitem"><a href="../contact.php">Contact</a></li>
        </ul>

        <div class="but">
            <?php
            if(isset($_SESSION['username']))
            {
                ?>
                    <a href="layout/logout.php">Log Out</a>
                <?php
            }
            else
            {
                ?>
                    <a href="layout/login.php">Log In</a>
                <?php
            }
            ?>
        </div>

    </div>

	<div class="text">
		<p>Login</p>
	</div>
	

	<div class="box">

		<div class="image">
			<img src="image/avatar1.png"> 
		</div>

		<div class="forms">
			<form action="logincode.php" method="post">
				<input id="text1" type="email" name="email" placeholder="Email"><br><br>
				<input id="text1" type="password" name="password" placeholder="Password"><br><br>
				
				<input type="submit" value="Login" name="loginbtn"><br><br>
				If you haven't signed in<i style="margin-left: 20px; color: #137D4D;"class="fa-solid fa-arrow-right"></i><a style="margin-left: 20px; color: #137D4D; font-size: 20px; font-weight: bold;"href="signup.php">Sign in</a>
			</form>
		</div>

	</div>

	<div class="footer">
            <div class="details1">
                <div class="ig">
                    <a href="../home.php"><img src="image/logo.png"></a>
                </div>
                <div class="define">
                    <p> For more than 20 years, the company has been supplying high-quality furniture made in India, China, and Nepal, including beds, mattresses, closets, sofas, and much more. In addition, the group takes orders for furniture made in their own factory.</p>
                </div>
            </div>
            <div class="details2">
                <div class="txt1">
                    <p>Links</p>
                </div>
                <div class="define1">
                    <a href="../home.php">Home</a><br>
                    <a href="../product.php">Product</a><br>
                    <a href="../aboutus.php">About Us</a><br>
                    <a href="../contact.php">Contact Us</a>
                </div>
            </div>
            <div class="details3">
                <div class="txt2">
                    <p>Location</p>
                </div>
                <div class="define2">
                    <p>
                        Kalimati, Kathmandu (Opposite to Prabhu Bank)<br>
                        Nepal<br>
                        <i class="fa-solid fa-envelope"></i>furniture@gmail.com
                    </p>
                </div>
                <div class="sm">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>

  <div class="right">
        <p><i class="fa-solid fa-copyright"></i> Copyright. All rights reserved.</p>
  </div>

</body>
</html>