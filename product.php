<?php session_start(); include 'layout/conn.php';
$single = "Bed";
$king = "Sofa";
$queen = "Mattress";
$double = "Cupboard";
?>
<style>
<?php include 'css/product.css';?>
<?php include 'css/footer.css';?>
<?php include 'css/style1.css'; ?>
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css  ">

  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style type="text/css">
    <?php include 'layout/conn.php'; ?>

  

  
    .card {
      width: 300px;
      display: inline-block;
      margin: 1rem;
      border-radius: 4px;
      box-shadow: 0 -1px 1px 0 rgba(0, 0, 0, 0.05), 0 1px 2px 0 rgba(0, 0, 0, 0.2);
      transition: all 0.2s ease;
      background: #fff;
      position: relative;
      overflow: hidden;
    }

    .card:hover,
    .card.hover {
      transform: translateY(-4px);
      box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.3), 0 0 1px 0 rgba(0, 0, 0, 0.25);
    }

    .card:hover .card-content,
    .card.hover .card-content {
      box-shadow: inset 0 3px 0 0 #ccb65e;
      border-color: #ccb65e;
    }

    .card:hover .card-img .overlay,
    .card.hover .card-img .overlay {
      background-color: rgba(25, 29, 38, 0.85);
      transition: opacity 0.2s ease;
      opacity: 1;
    }

    .card-img {
      position: relative;
      height: 224px;
      width: 100%;
      background-color: #fff;
      transition: opacity 0.2s ease;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .card-img a:hover 
    {
        background-color: white;
    }
/*
    .card-img .overlay {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: #fff;
      opacity: 0;
    }*/

    /*.card-img .overlay .overlay-content {
      line-height: 224px;
      width: 100%;
      text-align: center;
      color: #fff;
    }

    .card-img .overlay .overlay-content a {
      color: #fff;
      padding: 0 2rem;
      display: inline-block;
      border: 1px solid rgba(255, 255, 255, 0.4);
      height: 40px;
      line-height: 40px;
      border-radius: 20px;
      cursor: pointer;
      text-decoration: none;
    }*/
/*
    .card-img .overlay .overlay-content a:hover,
    .card-img .overlay .overlay-content a.hover {
      background: #ccb65e;
      border-color: #ccb65e;
    }*/

    .card-content {
      width: 100%;
      min-height: 104px;
      background-color: #fff;
      border-top: 1px solid #E9E9EB;
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px;
      padding: 1rem 2rem;
      transition: all 0.2s ease;
    }

    .card-content a {
      text-decoration: none;
      color: #202927;
    }

    .card-content h2,
    .card-content a h2 {
      font-size: 1rem;
      font-weight: 500;
    }

    .card-content p,
    .card-content a p {
      font-size: 0.8rem;
      font-weight: 400;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      color: rgba(32, 41, 28, 0.8);
    }



    .card-slider {
      max-width: 960px;
      margin: 0 auto;
    }

    @media screen and (max-width: 1024px) {
      .card-slider {
        width: 80%;
      }
    }

    .card-slider .slick-prev-icon,
    .card-slider .slick-next-icon {
      color: black;
    }

    .card-slider .slick-slide {
      padding: 0 10px;
    }

    .card-slider .card {
      position: relative;
      display: flex !important;
      flex-direction: column;
      height: 250px;
      border-radius: 3px;
      border: 1px solid rgba(0, 0, 0, 0.2);
      background-color: white;
      text-decoration: none;
      color: rgba(0, 0, 0, 0.9);
      transition: all 0.1s linear;
    }

    @media screen and (max-width: 600px) {
      .card-slider .card {
        height: auto;
      }
    }

    .card-slider .card .main-link {
      text-decoration: none;
      display: flex;
      flex-direction: column;
    }

    .card-slider .card .main-link:focus {
      outline: none;
    }

    .card-slider .card .main-link:focus .title {
      outline: 3px dashed orange;
      outline-offset: -4px;
      color: royalblue;
      text-decoration: underline;
    }

    .card-slider .card .title {
      color: #000;
      margin: 0;
      padding: 10px 10px 5px 10px;
      font-size: 16px;
      font-weight: bold;
    }

    .card-slider .card .title:hover {
      text-decoration: underline;
    }

    .card-slider .card .image {
      order: -1;
      position: relative;
      height: 100px;
      padding: 2px;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card-slider .card .image img {
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      filter: grayscale(0.5);
      transition: all 0.3s ease-in-out;
    }

    .card-slider .card .image:hover img {
      width: 110%;
      height: 110%;
    }

    .card-slider .card .description {
      margin: 7px 10px 15px 10px;
      font-size: 14px;
      opacity: 0.8;
    }

    .card-slider .card .badge {
      position: absolute;
      top: 2px;
      right: 2px;
      z-index: 1;
      padding: 5px 10px;
      font-size: 12px;
      font-weight: bold;
      text-transform: uppercase;
      color: white;
      background-color: #c80000;
    }

    .card-slider .card .price {
      padding-left: 10px;
    }

    .card-slider .card .price .new-price {
      font-weight: bold;
    }

    .card-slider .card .price .original-price {
      margin-left: 5px;
      font-size: 14px;
      font-style: italic;
      opacity: 0.5;
      text-decoration: line-through;
    }

    .card-slider .card .rating {
      margin: 10px 0 15px 10px;
      color: orange;
      font-size: 12px;
    }

    .card-slider .card .rating .reviews-link {
      color: rgba(0, 0, 0, 0.6);
      margin-left: 5px;
    }

    .card-slider .card .rating .reviews-link:hover {
      color: black;
    }

    .card-slider .card .rating .reviews-link:focus {
      color: royalblue;
      outline: 3px dotted royalblue;
      outline-offset: 2px;
    }

    .card-slider .card:hover {
      border-color: rgba(0, 0, 0, 0.4);
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
    }

    .card-slider .card:hover .image img,
    .card-slider .card:focus .image img {
      filter: grayscale(0);
    }

    .card-slider .card a:focus {
      outline: none;
    }



    .note {
      text-align: center;
      font-size: 14px;
      max-width: 960px;
      padding: 40px 20px;
      margin: 0 auto;
      opacity: 0.8;
    }

    .note a {
      color: black;
      font-weight: bold;
    }

    .note a:hover,
    .note a:focus {
      color: royalblue;
    }
    .container
    {
      margin-top: 50px;
    }
  </style>
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

		<div class="top">
			<h1>Our Products</h1>
            <div class="bor"></div>
		</div>	

		<div class="pro">
			<div class="container_">
            	<a href="#bed_"><img src="image/doublebed.jpg" alt="Avatar" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text">Bed</div>
                  </div>
                </a>
        	</div>
        	<div class="container_">
	            <a href="#sofa_"><img src="image/img3.jpg" alt="Avatar" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text">Sofa</div>
                  </div>
                </a>
	        </div>
	        <div class="container_">
	            <a href="#mattress_"><img src="image/mattress4.jpg" alt="Avatar" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text">Mattress</div>
                  </div>
                </a>
	        </div>
	        <div class="container_">
	            <a href="#cupboard_"><img src="image/c.jpg" alt="Avatar" class="image" style="width:100%">
                  <div class="middle">
                    <div class="text">Cupboard</div>
                  </div>
                </a>
	        </div>
		</div>  

        
    <div class="container mt-5" id="bed_">
    <h3  class="text-center"> <?php echo $single; ?></h3>

    <div class="row">
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `bed_tbl` WHERE id = 2");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="bed.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Material: <?php echo $row['Material']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `bed_tbl` WHERE id = 5");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="bed.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Material: <?php echo $row['Material']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `bed_tbl` WHERE id = 8");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="bed.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Material: <?php echo $row['Material']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    </div>

    <div class="container mt-5" id="sofa_">
    <h3  class="text-center"> <?php echo $king; ?></h3>

    <div class="row">
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `sofa_tbl` WHERE id = 2");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="sofa.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Seat: <?php echo $row['Seat']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `sofa_tbl` WHERE id = 4");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="sofa.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Seat: <?php echo $row['Seat']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `sofa_tbl` WHERE id = 6");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="sofa.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Seat: <?php echo $row['Seat']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    </div>

    <div class="container mt-5" id="mattress_">
    <h3  class="text-center"> <?php echo $queen; ?></h3>

    <div class="row">
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `mattress_tbl` WHERE id = 1");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="mattress.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `mattress_tbl` WHERE id = 3");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="mattress.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `mattress_tbl` WHERE id = 5");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="mattress.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li> Size: <?php echo $row['Size']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    </div>


    <div class="container mt-5" id="cupboard_">
    <h3  class="text-center"> <?php echo $double; ?></h3>

    <div class="row">
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `cupboard_tbl` WHERE id = '2'");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="cupboard.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li>Material: <?php echo $row['Material']; ?></li>
                  <li>Dimension: <?php echo $row['Dimensions']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `cupboard_tbl` WHERE id = '4'");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="cupboard.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li>Material: <?php echo $row['Material']; ?></li>
                  <li>Dimension: <?php echo $row['Dimensions']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <?php
      $single_ = mysqli_query($conn, "SELECT * FROM `cupboard_tbl` WHERE id = '6'");
      ?>
      <?php
      while ($row = mysqli_fetch_assoc($single_)) {
      ?>
        <div class="col-md-4">
          <div class="card hover">
            <div class="card-img">
              <a href="cupboard.php"><img src="<?php echo $row['Image']; ?>" class="card-img-top" alt="..." width="100" height="220px"></a>
              <div class="overlay">
                <div class="overlay-content">
                  <!-- <a class="hover" href="order.php">Order Now</a> -->
                </div>
              </div>
            </div>
            <div class="card-content">
              <a href="#!">
                <!-- <h2>Title</h2> -->
                <ul class="">
                  <li style="color:#BC8F8F;"><?php echo $row['Title']; ?></li>
                  <li>Material: <?php echo $row['Material']; ?></li>
                  <li>Dimension: <?php echo $row['Dimensions']; ?></li>
                  <li>Weight: <?php echo $row['Weight']; ?></li>
                  <li>Color: <?php echo $row['Color']; ?></li>
                  <li>Quantity: <?php echo $row['Stock']; ?></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
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