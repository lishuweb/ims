<style>
    <?php include 'css/adminstyle.css';?>
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
                  <a href="logout.php">Logout</a>
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

</body>
</html>