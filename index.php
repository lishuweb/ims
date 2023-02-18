<style>
  <?php include 'css/adminstyle.css';?>
</style>
<style>
  <?php include 'layout/conn.php';?>
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
</head>
<body>
  <div class="container">
    
       <div class="side-bar">

            <div class="top">
                <img src="image/logo.png">
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
                  <a href="aboutus.php">About</a>
                  <a href="contact.php">Contact</a>
                  <a href="#contact">Logout</a>
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
            <a href="layout/product_table.php">Product</a>
            <i class="fa-solid fa-user"></i>
        </div>
    

    <div class="info">
      <div class="box1">
        <div class="icon">
          <i class="fa-solid fa-users"></i>
        </div>
        <div class="details">
          <?php
                
                            $query = "SELECT id FROM signup WHERE usertype='user'";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total users : '.$row.'</h4>';
                        ?>
          <!-- <h4>Users</h4> -->
        </div>
      </div>
      <div class="box2">
        <div class="icon">
          <i class="fa-solid fa-list"></i>
        </div>
        <div class="details">
          <?php
                
                            $dash_query = "SELECT * from sofa_tbl, bed_tbl, mattress_tbl, cupboard_tbl";  
                            $dash_query_run = mysqli_query($conn, $dash_query);

                            if($category_total=mysqli_num_rows($dash_query_run));
                            {
                              echo '<h4> Total categories : '.$category_total.'</h4>';
                            }
                            
                        ?>
          <!-- <h4>Categories</h4> -->
        </div>
      </div>
      <div class="box3">
        <div class="icon">
          <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div class="details">
          <h4>Products</h4>
        </div>
      </div>
    </div>

    <div class="info2">
      
      <div class="high">
        <div class="front">
          <p>Highest Selling Products</p>
        </div>
        <div class="tbl">
          <table>
            <tr>
              <th>Product Name</th>
              <th>Total Sold</th>
              <th>Total Quantity</th>
            </tr>
            <tr>
              <td style="margin-top: 20px;">King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="latest">
        <div class="front">
          <p>Latest Sales</p>
        </div>
        <div class="tbl">
          <table>
            <tr>
              <th>Product Name</th>
              <th>Total Sold</th>
              <th>Total Quantity</th>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
            <tr>
              <td>King Sized Bed</td>
              <td>13</td>
              <td>30</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="recent">
        <div class="front">
          <p>Recent Added Products</p>
        </div>
        <div class="tbl">
          <table>
            <tr>
              <th>Product Name</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>Armchair</td>
              <td>Rs. 6000</td>
            </tr>
            <tr>
              <td>Armchair</td>
              <td>Rs. 6000</td>
            </tr>
            <tr>
              <td>Armchair</td>
              <td>Rs. 6000</td>
            </tr>
            <tr>
              <td>Armchair</td>
              <td>Rs. 6000</td>
            </tr>
            <tr>
              <td>Armchair</td>
              <td>Rs. 6000</td>
            </tr>
            <tr>
              <td>Armchair</td>
              <td>Rs. 6000</td>
            </tr>
          </table>
        </div>
      </div>

    </div>
  </div>

</body>
</html>