 
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
        .forms  
        {
            height: 750px;
            width: 80%;
            float: right;
            margin-top: 3%;
            background-color: #D1F2EB;
            border-radius: 3px;
        }
        .forms form  
        {
            margin-top: 40px;
        }
        .forms .form-label 
        {
            font-size: 16px;
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
        
        input[type="file"] 
        {
            display: none;
        }
        .custom-file-upload 
        {
            cursor: pointer;
            text-align: center;
            background-color: #fff;
            color: #000;
            border-radius: 3px;
            margin-left: 30px;
            display: block;
            width: 140px;
            height: 70px;
            font-size: 18px;
            font-weight: bolder;
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
                    <a href="bed.php"><i class="fa-solid fa-bed"></i>Bed</a>
                    <a href="sofa.php"><i class="fa-solid fa-couch"></i>Sofa</a>
                    <a href="mattress.php"><i class="fa-solid fa-mattress-pillow"></i>Mattress</a>
                    <a href="cupboard.php"><i class="fa-solid fa-store"></i>Cupboard</a>
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
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="forms">
            <form action="up.php" method="post" enctype="multipart/form-data">
               
                <!-- <div class="form-outline">
                    <label class="form-label" for="form1Example1">Id</label><br>
                    <input type="hidden" name="id" class="form-control" value="1"/>
                </div> -->
                <div class="form-outline"> 
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                </div>
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Title</label><br>
                    <input type="text" name="sofa_title" class="form-control" required value="<?php echo $row['Title'];?>">
                </div>
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Size</label><br>
                    <input type="text" name="sofa_size" class="form-control" required value="<?php echo $row['Size'];?>"> 
                </div>
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Color</label><br>
                    <input type="text" name="sofa_color" class="form-control" required value="<?php echo $row['Color'];?>"> 
                </div>
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Seat Material</label><br>
                    <input type="text" name="sofa_material" class="form-control" required value="<?php echo $row['Seat'];?>">
                </div>
                <div class="form-outline">
                    <label class="form-label" for="form1Example1">Stock</label><br>
                    <input type="text" name="sofa_stock" class="form-control" required value="<?php echo $row['Stock'];?>">
                </div>
                <div class="form-outline">
                    <label class="custom-file-upload"><br>
                        <input type="file" name="image">
                        Upload Image
                    </label>
                </div>

                <!-- Submit button -->
                <input type="submit"  name="update" value="Update">
            </form>

        </div>



</body>
</html>


<?php
include('conn.php');
$db=mysqli_select_db($conn,'ims_project');
if(isset($_POST['update']))
{
    $id=$_REQUEST['id'];
    $sofa_title=$_POST['sofa_title'];
    $sofa_size=$_POST['sofa_size'];
    $sofa_color=$_POST['sofa_color'];
    $sofa_material=$_POST['sofa_material'];
    $sofa_stock=$_POST['sofa_stock'];
    
    $file__="image/";
    $file_data = $file__.$_FILES['image']['name'];

/* Update your posted data in your database - insert SQL code. */

$sql = "UPDATE `sofa_tbl` SET `Title` = 'sofa_title', `Size` = '$sofa_size', `Color` = '$sofa_color', `Seat` = '$sofa_material', `Image` = '$file_data' WHERE `sofa_tbl`.`Id` = ".$id;

/* Run insert query in database. */
$rs = mysqli_query($conn, $sql);

/* Check records is updated or not. */
if($rs)
{
echo "Contact Records updated";
}
}
else
{
echo "Are you a genuine visitor?";

}
?>