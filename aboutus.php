<style>
<?php session_start(); include 'css/aboutus.css'; ?>
<?php include 'css/style1.css'; ?>
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    

</head>
<body>
	
	<div class="nav_bar">

        <div class="logo">
            <a href="home.php"><img src="image/logo.png"></a>
        </div>

        <ul class="navlist"> 
            <li class="navlistitem"><a class="active" href="home.php">Home</a></li>
            <li class="navlistitem"><a href="product.php">Products</a></li>
            <li class="navlistitem"><a href="aboutus.php">About Us</a></li>
            <li class="navlistitem"><a href="contact.php">Contact</a></li>
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

	<div class="second">
		<img src="image/au.jfif"> 
		<p>About Us</p>
	</div>

	<div class="text">
		<h1>Our story</h1>
		<br><br>
		<p>
			Based in Kalimati, Kathmandu, and founded in 2055 A.D. Our company has been operating in the Kathmandu district for more than 20 years. Our business sells furniture that is both functional and environmentally friendly. For more than 20 years, the company has been supplying high-quality furniture made in India, China, and Nepal, including beds, mattresses, closets, sofas, and much more. In addition, the group takes orders for furniture made in their own factory.
		</p>
	</div>

	<div class="text2">
		<h1>Our Services</h1>

		<div class="ser">
			
			<div class="box1">
				<div class="one">
					<h6>1</h6>
				</div>
					<h3>Meeting Environmental Concerns</h3>
					<br>
					<p>Sustainability is already a large consumer concern, with consumers willing to spend more for products they know were produced by brands that also share their concerns for the environment.</p>
				
			</div>

			<div class="box2">
				<div class="one">
					<h6>2</h6>
				</div>
					<h3>Enterprise modernization and platforms</h3>
					<br>
					<p>We will help you to accelerate your path to innovation and realize business benefits faster. From improved customer experiences and retention, to increased sales and a reduction of costs, we help you to assess and prioritize what will enable you to meet your organizational goal.</p>
			</div>

			<div class="box3">
				<div class="one">
					<h6>3</h6>
				</div>
					<h3>Customer experience, product and design</h3>
					<br>
					<p>We align product thinking with platform expertise and digital execution to deliver holistic customer experiences that are different by design. We help you embed customer experience into product strategy to drive engagement, preference and purchase.</p>
			</div>

		</div>
	</div> 

	<div class="footer">
            <div class="details1">
                <div class="ig">
                    <a href="home.php"><img src="image/logo.png"></a>
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
                    <a href="home.php">Home</a><br>
                    <a href="product.php">Product</a><br>
                    <a href="aboutus.php">About Us</a><br>
                    <a href="contact.php">Contact Us</a><br>
                    <a href="layout/login.php">Login</a>
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