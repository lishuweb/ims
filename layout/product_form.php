<style>
	<?php include 'header.php';?>
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
		}
		.forms  
        {
            height: 300px;
            width: 80%;
            float: right;
            margin-top: 8%;
            background-color: #D1F2EB;
            border-radius: 3px;
        }
        h1 
        {
            font-size: 26px;
            font-weight: bold;
            text-align: center;
            color: #117A65;
            margin-top: 20px;
        }
        h1 i 
        {
            color: #fff;
            margin-right: 10px;
        }
        .forms form  
        {
            margin-top: 40px;
        }
        .forms .form-label 
        {
            font-size: 20px;
            font-weight: bold;
            color: #000;
            margin-left: 30px;
            
        }
        input[type="text"]
        {
            width: 96%;
            height: 40px;
            border: 1px solid #fff;
            border-radius: 3px;
            margin-top: 20px;
            margin-bottom: 30px;
            margin-left: 30px;
        }
        input[type="text"].active 
        {
            border: 1px solid darkred;
        }
        input[type="submit"]
        {
            display: block;
            cursor: pointer;
            height: 50px;
            width: 90px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            background-color: #138D75;
            border: none;
            color: #fff;
            border-radius: 3px;
            font-size: 16px;
        }
        
	</style>
</head>
<body>

		<div class="forms">
			<h1>Product Form</h1>
			<form action="product_insert.php" method="post">
               
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Product_Name</label><br>
                    <input type="text" name="product_title" class="form-control" />
                </div>
                
                <!-- Submit button -->
                <input type="submit"  name="submit" value="Submit">
            </form>

		</div>

</body>
</html>