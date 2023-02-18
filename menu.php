<style>
<?php include 'css/style1.css'; ?>
</style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" href="css/style1.css"> -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Linking the Jquery script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
</body>
</html>