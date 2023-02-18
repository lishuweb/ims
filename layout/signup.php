<style>
    <?php include 'css/footer.css';?>
    
</style>
<style>
    <?php include 'conn.php';?>
</style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

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
        .container
        {
            display: flex;
            /*border: 1px solid black;*/
            height: 850px;
            width: 90%;
            margin-top: 3%;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
        }
        .container .one 
        {
            display: inline-block;
            /*border: 1px solid black;*/
            height: 300px;
            width: 30%;
            position: relative;
        }
        .container .one img 
        {
            height: 100%;
            width: 100%;
            position: absolute;
        }
        .container .two 
        {
            display: flex;
            height: 680px;
            width: 50%;
            /*justify-content: center;*/
            /*border: 1px solid black;*/
        }
       
        .container .two .forms 
        {
            justify-content: center;
            text-align: center;
            align-items: center;
            /*border: 1px solid black;*/
            width: 100%;

        }
        .container .two .forms h2
        {
            font-size: 30px;
            /*text-decoration: underline;
            text-underline-position: under;*/
            text-align: center;
            margin-top: 40px;
            position: relative;
            color: green;
        }
        .container .two .forms h2:after
        {
            content: '';
            position: absolute;
            right: 48%;
            bottom: 0;
            transform: translate(-50%);
            height: 4px;
            width: 40px;
            border-radius: 2px;
            background-color: green;
        }
        .container .two .forms form 
        {
            margin-top: 40px;
        }
        .container .two .forms form input[type="text"], input[type="password"], input[type="email"], input[type="number"]
        {
            border:0;
            background:none;
            display: inline-block;
            width: 40%;
            height: 40px;
            border: none;
            background-color:none;
            border-bottom: 2px solid green;
            text-align: center;
            transition: 0.25s;
            border-radius: 2px;
        }
        .container .two .forms form input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="number"]:focus
        {
           width: 48%;
           /*border-bottom: 2px solid red;*/
           outline: none; 
        }
        .container .two .forms form input[type="radio"]
        {
            margin-Left: 0 12px 29px 22px;
        }
       /* .container .two .forms form input[type="radio"]
        {
            margin-Left: 0;
        }*/
        .container .two .forms form input[type="checkbox"]
        {
            margin-right: 10px;
        }
        .container .two .forms form input[type="submit"]
        {
            margin-top: 10px;
            height: 50px;
            width: 100px;
            color: white;
            background-color: #137D4D;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            /*padding: 14px 30px;*/
            text-align: center;
        }
        .container .two .forms form input[type="submit"]:hover
        {
            cursor: pointer;
            background-color: #76BCA1;
            color: white;
            transition: .3s;
        }
        .container .two .forms form label[for="male"]
        {
            margin-right: 20px;
        }
        .forms h6 
        {
            text-align: center;
            font-size: 15px;
            font-weight: bold;
            margin-top: 20px;
        }
        .forms h6 a 
        {
            text-decoration: none;
            margin-left: 20px;
            color: green;
            /*background-color: green;*/
            padding: 7px 13px;
            /*border-radius: 3px;*/
            border-bottom: 2px solid green;
            font-weight: bolder;
            font-size: 18px;
        }
        .forms h6 a:hover 
        {
            color: #76BCA1;
            transition: .3s;
            border-color: #76BCA1;
        }
        .forms select 
        {
            border: 1px solid green;
            width: 100px;
            height: 30px;
        }

</style>
</head>

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

    <div class="container">
        
        <div class="one">
            <img src="image/signin.png">
        </div>

        <div class="two">
            
            
            <div class="forms">
                <h2>Sign in</h2>
                <form name="myForm" action="code.php" method="post">

                    <input id="text1" type="text" name="username" placeholder="Full Name" style="text-transform: capitalize;" class="uc-text">
                    <!-- <script>
                            var forceInputUppercase = function(e) 
                            {
                                let el = e.target;
                                let start = el.selectionStart;
                                let end = el.selectionEnd;
                                el.value = el.value.toucfirst();
                                el.setSelectionRange(start, end);
                            };

                            document.querySelectorAll(".uc-text").forEach(function(current) 
                            {
                                current.addEventListener("keyup", forceInputUppercase);
                            });

                    </script> -->
                    <br><br>
                    <input id="text1" type="password" name="password" placeholder="Password" required="">
                    <br><br>
                    <input id="text1" type="password" name="cpassword" placeholder="Confirm Password" required="">
                    <br><br>
                    <input id="text1" type="text" name="address" placeholder="Address" style="text-transform: capitalize;" required="">
                    <br><br>
                    <input id="text1" type="text" name="cnumber" placeholder="Contact number" required="">
                    <br><br>
                    <input id="text1" type="email" name="email" placeholder="Email  eg. a@a.com" required="">
                    <br><br>
                    
                    <input type="submit" value="Sign In" name="submit"> 
                    <h6>Already have an account?<a href="login.php">Login</a></h6>
                </form>
            </div>
            
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
                    <a href="../contact.php">Contact Us</a><br>
                    <a href="login.php">Login</a>
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

