<?php session_start(); ?>
<style>
    <?php include 'header.php';?>
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
        .user 
        {
        	height: 700px;
        	width: 80%;
        	float: right;
        	/*border: 1px solid black;*/
        	margin-top: 8%;
        	/*display: flex;*/
        	justify-content: center;
        	align-items: center;
        	text-align: center;
        }
        .user .ig 
        {
        	height: 150px;
        	width: 150px;
        	/*border: 1px solid black;*/
        	margin-left: auto;
        	margin-right: auto;
        	border-radius: 50px;
        }
        .ig img 
        {
        	height: 100%;
        	width: 100%;
        	object-fit: cover;
        }
        .user .tbl 
        {
        	height: 100px;
        	width: 100%;
        	/*border: 1px solid black;*/
        	justify-content: center;
        	align-items: center; 
            margin-top: 60px;     
        	text-align: center;
            display: flex;
        }
        .user .tbl1 
        {
            height: 100px;
            width: 100%;
            /*border: 1px solid black;*/
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
        }
        .tbl1 .btn1 
        {
            float: left;
            height: 100%;
            width: 50%;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
        }
        .tbl1 input[type="button"]
        {
            border: 1px solid black;
            padding: 10px 20px;
            background-color: #5DADE2;
            border: none;
            color: #fff;
            float: left;
            margin-left: 10px;
        }
        .tbl1 input[type="button"]:hover 
        {
            background-color: #7FB3D5;
            cursor: pointer;
        }
        .user .tbl1 .btn 
        {
            float: right;
            height: 100%;
            width: 50%;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
        }
        .user .tbl1 .btn a 
        {
        	color: #fff;
        	text-decoration: none;
        	font-size: 18px;
        	font-weight: bold;
        	text-align: center;
            height: 50px;
            width: 100px;
            background-color: #137D4D;
            text-align: center;
            justify-content: center;
            align-items: center;
            display: flex;
            border-radius: 3px;
            float: right;
            /*margin-left: 30px;*/
        }
        .user .tbl1 .btn a:hover 
        {
            cursor: pointer;
            background-color: #76BCA1;
            color: white;
            transition: .3s;
        
        }
        
    </style>
</head>
<body>
		<div class="user">
			<div class="ig">
				<img src="image/avatar1.png"> 
			</div>
            <div class="tbl">
                <?php
                
                    $query = "SELECT * FROM admin_login";  
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);
                    while($row=mysqli_fetch_assoc($query_run))
                        {
                ?>
                            <h4>
                                <span>Name : </span> <?php echo $row['admin_name']; ?><br><br>
                                <span>Password : </span> <?php echo $row['admin_password']; ?><br><br>
                            </h4>
                        <?php
                        }
                        ?>   
            </div>
				
		 	<div class="tbl1">
                 
                <div class="btn">
                    <a href="logoutadmin.php">Logout</a>
                </div> 
            </div>
		</div>
</body>
</html>