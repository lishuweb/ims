<style>
<?php include 'css/adminstyle.css';?>
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
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/392/Chart.min.js"></script>


    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Merriweather&family=Poppins:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@200&display=swap');
    @import "./fontawesome/scss/fontawesome.scss";
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Kdam+Thmor+Pro&family=Koulen&family=Merriweather&family=Poppins:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Josefin+Sans:wght@500&family=Kdam+Thmor+Pro&family=Koulen&family=Merriweather:ital@0;1&family=Noto+Serif:wght@700&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap');
    <?php include 'css/adminstyle.css';?>
    .info 
    {
        display: block;
        height: 440px;
        width: 80%;
        float: right;
        margin-top: 8%;
        background-color: #F8F9F9;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .info .first 
    {
        height: 220px;
        width: 100%;
        /*border: 1px solid black;*/
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .info .second 
    {
        height: 220px;
        width: 100%;
        /*border: 1px solid black;*/
        display: flex;
        justify-content: center;
        /*align-items: center;*/
        text-align: center;
    }
    .first .box1 a,
    .second .box1 a 
    {
        text-decoration: none;
    }
    .first .box1,
    .first .box2,
    .first .box3
    {
        height: 45%;
        width: 30%;
        margin-top: 30px;
        margin-left: 20px;
        margin-right: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .second .box1,
    .second .box2,
    .second .box3
    {
        height: 45%;
        width: 30%;
        /*margin-top: 30px;*/
        margin-left: 20px;
        margin-right: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .first .box1 .icon,
    .second .box1 .icon 
    {
        background-color: #16A085;
    }
    .second .box1 .icon 
    {
        background-color: #5499C7;
    }
    .second .box2 .icon  
    {
        background-color: #CD6155;
    }
    .first .box2 .icon
    {
        background-color: #BB8FCE;
    }
    .first .box3 .icon,
    .second .box3 .icon
    {
        background-color: #DC7633;
    }
    .first .box1 .icon,
    .first .box2 .icon,
    .first .box3 .icon,
    .second .box1 .icon,
    .second .box2 .icon,
    .second .box3 .icon
    {
        height: 100%;
        width: 40%;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .first .box1 .icon i,
    .first .box2 .icon i,
    .first .box3 .icon i,
    .second .box1 .icon i,
    .second .box2 .icon i,
    .second .box3 .icon i
    {
        color: #fff;
        font-size: 38px;
    }
    .first .box1 .details,
    .first .box2 .details,
    .first .box3 .details,
    .second .box1 .details,
    .second .box2 .details,
    .second .box3 .details
    {
        background-color: #FDFEFE;
        height: 100%;
        width: 60%;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .first .box1 .details a,
    .first .box2 .details a,
    .first .box3 .details a,
    .second .box1 .details a,
    .second .box2 .details a,
    .second .box3 .details a
    {
        text-decoration: none;
        color: #000;
    }
    .first .box1 .details a:hover,
    .first .box2 .details a:hover,
    .first .box3 .details a:hover,
    .second .box1 .details a:hover,
    .second .box2 .details a:hover,
    .second .box3 .details a:hover
    {
        color: #A569BD;
    }
    .first .box1 .details h4,
    .first .box2 .details h4,
    .first .box3 .details h4,
    .second .box1 .details h4,
    .second .box2 .details h4,
    .second .box3 .details h4
    {
        text-align: center;
        font-weight: bold;
    }
    .container .recent 
    {
        border: 1px solid black;
        height: 200px;
        width: 80%;
        margin-top: 30px;
    }
    .de 
    {
        margin-top: 50px;
        height: 60px;
        width: 80%;
        float: right;
        background-color: #16A085;
        justify-content: center;
        align-items: center;
        text-align: center;
        display: flex;
        font-size: 22px;
        font-weight: bolder;
        color: #fff;
        border-radius: 3px;
    }
    .pr 
    {
        height: 300px;
        width: 80%;
        float: right;
        /*border: 1px solid black;*/
        margin-top: 40px;
    }
    .pr table 
    {
        /*border-collapse: collapse;*/
        width: 50%;
        /*table-layout: auto;*/
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
    }
    .pr table th  
    {
       background-color: #D1F2EB;
       color: #0E6655;
       font-weight: bolder;
       font-size: 19px;
    }
    .pr table td 
    {
       background-color: #fff;
       border-bottom: 1px solid #D0ECE7;
       height: 50px;
       font-size: 18px;
    }
    .me 
    {
        height: 400px;
        width: 80%;
        float: right;
        background-color: #F8F9F9;
        margin-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .me .o1,
    .me .s1
    {
        width: 100%;
        height: 50px;
        /*background-color: #fff;*/
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin-top: 20px;
    }
    .me .o1 h1,
    .me .s1 h1 
    {
        text-align: center;
    }
    .me .o1
    {
        margin-left: 20px;
    }
    .me .o
    {
        height: 75%;
        width: 45%;
        /*border: 1px solid black;*/
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: #fff;
        margin-top: 30px;
        margin-left: 30px;
        border-radius: 5px;
        margin-right: auto;
        float: left;
    }
    .me .s 
    {
        height: 75%;
        width: 48%;
        /*border: 1px solid black;*/
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: #fff;
        margin-top: 30px;
        margin-right: 30px;
        border-radius: 5px;
        float: right;
        margin-left: auto;
    }
    .me .o a table,
    .me .s a table
    {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        font-size: 18px;

    }
    .me .o a table th,
    .me .s a table th
    {
        background-color: #D1F2EB;
        color: #0E6655;
        font-weight: bolder;
        font-size: 16px;
    }
    .me .o a table td,
    .me .s a table td
    {
       background-color: #fff;
       border-bottom: 1px solid #D0ECE7;
       height: 50px;
       font-size: 16px;
    }

</style>
</head>
<body>
    
	<div class="container">

     <div class="side-bar">

        <div class="top">
            <a href="admin.php"><img src="image/logo.png"></a>
        </div>
        <ul class="sidenav">
          <a href="admin.php">Dashboard</a>
          <button class="dropdown-btn">Product
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="bed_table.php"><i class="fa-solid fa-bed"></i>Bed</a>
            <a href="sofa_table.php"><i class="fa-solid fa-couch"></i>Sofa</a>
            <a href="mattress_table.php"><i class="fa-solid fa-mattress-pillow"></i>Mattress</a>
            <a href="cupboard_table.php"><i class="fa-solid fa-store"></i>Cupboard</a>
        </div>
        <button class="dropdown-btn">Report
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="order_report.php">Order</a>
            <a href="sale_report.php">Sale</a>
        </div>
        <a href="logoutadmin.php">Logout</a>
    </ul>
</div>

    <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
      } else {
          dropdownContent.style.display = "block";
      }
  });
  }
    </script>

    <div class="nav">
        <ul class="tp">
            <li class="pd"><a href="product_table.php">Product</a></li>
            <li class="pd1"><a href="info.php"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </div>
    </div>	

    <div class="info">
    <div class="first">
        <div class="box1">
            <div class="icon">
                <i class="fa-solid fa-users"></i>
            </div>

            <div class="details">
                <a href="user.php">
                    <?php
                    
                    $query = "SELECT id FROM user_tbl";  
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4> Total users : '.$row.'</h4>';
                    ?>
                    <!-- <h4>Users</h4> -->
                </a>
            </div>
        </div>
        <div class="box2">
            <div class="icon">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>

            <div class="details">
                <a href="order_table.php">
                    <?php

                    $query = "SELECT * FROM order_tbl";  
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4> Total order : '.$row.'</h4>';
                    ?>
                    <!-- <h4>Users</h4> -->
                </a>
            </div>

        </div>
        <div class="box3">
            <div class="icon">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="details">
                <a href="product_table.php">
                    <?php

                    $query = "SELECT id FROM product_tbl ORDER BY id";  
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h4> Total Products : '.$row.'</h4>';
                    ?>
                    <!-- <h4>Products</h4> -->
                </a>
            </div>
        </div>
    </div>
    <div class="second">

        <div class="box1">
            <div class="icon">
                <i class="fa-solid fa-list"></i>
            </div>
            <div class="details">
                <a href="sale_report.php">
                    <?php

                    $dash_query = "SELECT * from order_tbl Where sold='1'";  
                    $dash_query_run = mysqli_query($conn, $dash_query);

                    if($category_total=mysqli_num_rows($dash_query_run));
                    {
                        echo '<h4> Total sales : '.$category_total.'</h4>';
                    }

                    ?>
                    <!-- <h4>Categories</h4> -->
                </a>
                
            </div>
        </div>
        
    </div>
    </div>

    </div>



    <div class="de">
        <?php
            echo date("l jS \of F Y, h:i:s A") . "<br>";
        ?>
    </div>

    <div class="pr">
        <table>
            <tr>
               <th>S.N.</th>
               <th>Product Name</th>
               <th>Total Stock</th>
            </tr>
            <?php 
          $conn=mysqli_connect('localhost','root','');
          $db=mysqli_select_db($conn,'ims_project');

                            // $select_query = "select * from sofa_table";
          $select_result = mysqli_query($conn,"select * from product_tbl where id=1");
          $total_rows = mysqli_num_rows($select_result);
          if($total_rows>0)
          {
            $sn = 1;
            ?>

            <?php 
            while($row=mysqli_fetch_assoc($select_result))
            {
                ?>
                <tr class="thiss">
                    <td>
                        <?php echo $sn++; ?>
                    </td>
                    <td>
                        <a href="bed_table.php"><?php echo $row['Product'];?></a>
                    </td>
                    <td>
                        <?php

                        $query = "SELECT id FROM bed_tbl ORDER BY id";  
                        $query_run = mysqli_query($conn, $query);
                        $row = mysqli_num_rows($query_run);
                        echo '<p>'.$row.'</p>';
                        ?>
                    </td>

                </tr>

            <?php }}

            ?>
            <?php 
            $conn=mysqli_connect('localhost','root','');
            $db=mysqli_select_db($conn,'ims_project');

                            // $select_query = "select * from sofa_table";
            $select_result = mysqli_query($conn,"select * from product_tbl where id=2");
            $total_rows = mysqli_num_rows($select_result);
            if($total_rows>0)
            {
                $sn = 2;
                ?>

                <?php 
                while($row=mysqli_fetch_assoc($select_result))
                {
                    ?>
                    <tr>
                        <td>
                            <?php echo $sn++; ?>
                        </td>
                        <td>
                            <a href="sofa_table.php"><?php echo $row['Product'];?></a>
                        </td>
                        <td>
                            <?php

                            $query = "SELECT id FROM sofa_tbl ORDER BY id";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<p>'.$row.'</p>';
                            ?>
                        </td>

                    </tr>

                <?php }}

                ?>

                <?php 
                $conn=mysqli_connect('localhost','root','');
                $db=mysqli_select_db($conn,'ims_project');

                            // $select_query = "select * from sofa_table";
                $select_result = mysqli_query($conn,"select * from product_tbl where id=4");
                $total_rows = mysqli_num_rows($select_result);
                if($total_rows>0)
                {
                    $sn = 3;
                    ?>

                    <?php 
                    while($row=mysqli_fetch_assoc($select_result))
                    {
                        ?>
                        <tr>
                            <td>
                                <?php echo $sn++; ?>
                            </td>
                            <td>
                                <a href="mattress_table.php"><?php echo $row['Product'];?></a>
                            </td>
                            <td>
                                <?php

                                $query = "SELECT id FROM mattress_tbl ORDER BY id";  
                                $query_run = mysqli_query($conn, $query);
                                $row = mysqli_num_rows($query_run);
                                echo '<p>'.$row.'</p>';
                                ?>
                            </td>

                        </tr>




                    <?php }}

                    ?>  

                    <?php 
                    $conn=mysqli_connect('localhost','root','');
                    $db=mysqli_select_db($conn,'ims_project');

                            // $select_query = "select * from sofa_table";
                    $select_result = mysqli_query($conn,"select * from product_tbl where id=5");
                    $total_rows = mysqli_num_rows($select_result);
                    if($total_rows>0)
                    {
                        $sn = 4;
                        ?>

                        <?php 
                        while($row=mysqli_fetch_assoc($select_result))
                        {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $sn++; ?>
                                </td>
                                <td>
                                    <a href="cupboard_table.php"><?php echo $row['Product'];?></a>
                                </td>
                                <td>
                                    <?php

                                    $query = "SELECT id FROM cupboard_tbl ORDER BY id";  
                                    $query_run = mysqli_query($conn, $query);
                                    $row = mysqli_num_rows($query_run);
                                    echo '<p>'.$row.'</p>';
                                    ?>
                                </td>

                            </tr>


                        <?php }}

                        ?>  
        </table>
    </div> 

    <div class="me">
        <div class="o">
            <div class="o1">
                <h3>Recently added orders</h3>
            </div>
            
            <a href="order_table.php">
                    <table>
                        <tr>
                            <th>S.N.</th> 
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Type</th>
                            <th>Date</th>
                        </tr>

                        <?php 
                        $conn=mysqli_connect('localhost','root','');
                        $db=mysqli_select_db($conn,'ims_project');

                        $q= mysqli_query($conn,"SELECT * FROM order_tbl ORDER BY id DESC LIMIT 3");
                        $total_rows = mysqli_num_rows($q);
                        if($total_rows>0)
                        {
                            $sn = 1;
                            ?>

                            <?php 
                            while($row=mysqli_fetch_assoc($q))
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $sn++; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Name'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['Quantity'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['Type'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['Date'];?>
                                    </td>
                                </tr>

                            <?php }}
                            ?> 


                        </table>
                    </a>
        </div>
        <div class="s">
            <div class="o1">
                <h3>Recently added sales</h3>
            </div>
            <a href="sale_report.php">
                        <table>
                            <tr>
                                <th>S.N.</th> 
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Type</th>
                                <th>Date</th>
                            </tr>

                            <?php 
                            $conn=mysqli_connect('localhost','root','');
                            $db=mysqli_select_db($conn,'ims_project');

                            $q= mysqli_query($conn,"SELECT * FROM order_tbl where sold=1 ORDER BY id DESC LIMIT 3");
                            $total_rows = mysqli_num_rows($q);
                            if($total_rows>0)
                            {
                                $sn = 1;
                                ?>

                                <?php 
                                while($row=mysqli_fetch_assoc($q))
                                {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $sn++; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Name'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['Quantity'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['Type'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['Date'];?>
                                        </td>
                                    </tr>

                                <?php }}
                                ?> 


                            </table>
                        </a>
        </div>
    </div>

</body>
</html>