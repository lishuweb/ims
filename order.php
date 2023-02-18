<style>
<?php session_start();
error_reporting(0);


 include 'css/footer.css';
?>
</style>
<?php
include 'layout/conn.php';
$id = $_GET['id'];

if(isset($_GET['bedtype']))
{
    $bed = $_GET['bedtype'];
    $q = mysqli_query($conn,"SELECT * FROM `bed_tbl` WHERE id = '$id' AND Type = '$bed'");
    $row = mysqli_fetch_assoc($q);
}
elseif(isset($_GET['mattresstype']))
{
    $mattress = $_GET['mattresstype'];
    $q = mysqli_query($conn,"SELECT * FROM `mattress_tbl` WHERE id = '$id' AND Type = '$mattress'");
    $row = mysqli_fetch_assoc($q);
}
elseif(isset($_GET['sofatype']))
{
    $sofa = $_GET['sofatype'];
    $q = mysqli_query($conn,"SELECT * FROM `sofa_tbl` WHERE id = '$id' AND Type = '$sofa'");
    $row = mysqli_fetch_assoc($q);
}
elseif(isset($_GET['cupboardtype']))
{
    $cupboard = $_GET['cupboardtype'];
    $q = mysqli_query($conn,"SELECT * FROM `cupboard_tbl` WHERE id = '$id' AND Type = '$cupboard'");
    $row = mysqli_fetch_assoc($q);
}
?>
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
    .two 
    {
        display: flex;
        height: 800px;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10%;
        /*border: 1px solid black;*/
    }

    .two .forms 
    {
        justify-content: center;
        text-align: center;
        align-items: center;
        /*border: 1px solid black;*/
        width: 100%;

    }
    .two .forms form 
    {
        margin-top: 30px;
    }
    .two .forms .form-group 
    {
        margin-top: 30px;
        text-align: center;
        justify-content: center;
        align-items: center;
    }
    .two .forms input
    {
        width: 50%;
        height: 40px;
        margin-top: 10px;
        border-color: #D0ECE7;
        box-sizing: border-box;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        padding: 12px 20px;
        margin: 8px 0;
        border-radius: 3px;
    }
    .two .forms input:focus
    {
        border: 2px solid #A2D9CE;
        width: 55%;
    }
    .two .forms form input[type="submit"]
    {
        margin-top: 40px;
        height: 50px;
        width: 100px;
        color: #fff;
        background-color: #137D4D;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        padding: 7px 13px;
        text-align: center;
    }
    .two .forms form input[type="submit"]:hover
    {
        cursor: pointer;
        background-color: #76BCA1;
        transition: .3s;
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

    <div class="two">

        <div class="forms">
            <?php
            $q = "SELECT * FROM user_tbl WHERE mail = '".$_SESSION['username']."'";
            $res = mysqli_query($conn,$q);
            $r = mysqli_fetch_assoc($res);
            ?>
            <form name="myForm" id="myForm" method="post">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label><br>
                    <input id="text1" type="text" name="username" placeholder="Full Name" required="" value="<?php
                        if(isset($_SESSION['username'])){
                            echo $r['username'];
                            // $tr = trim($r['username']);
                            // echo $tr;
                        }
                    ?>
                    ">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label><br>
                    <input id="text1" type="email" name="email" placeholder="example@gmail.com" required="" value="<?php
                        if(isset($_SESSION['username'])){
                            echo $r['mail'];
                        }
                    ?> 
                    ">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Contact Number</label><br>
                    <input id="text1" type="text"   name="cnumber" placeholder="Contact number" required="" value="<?php
                        if(isset($_SESSION['username'])){
                            echo $r['cnumber'];
                        }
                    ?>     
                    ">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Quantity</label><br>
                    <input type="text" name="quantity" placeholder="Quantity" required="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Color</label><br>
                    <input type="text" name="color" value="<?php echo $row['Color'];?>" readonly>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Date</label><br>
                    <input type="date" name="date" value="<?php echo date("Y-m-d") ?>" readonly>
                </div>

                <input type="submit" name="submit" value="Order">

      
                <input type="hidden" name="productid" placeholder="Enter Product Id" value="<?php echo $row['id'];?>" readonly>
                <br><br>
                <input type="hidden" name="type" placeholder="Enter Type" value="<?php echo $row['Type'];?>" readonly>
            </form>

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
      <!-- <a href="layout/login.php">Login</a> -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  

 
    $(document).ready(function(){

//   $('#myForm').submit((e)=>{
//     e.preventDefault();
//     $.ajax({
//             url:'layout/ordercode.php',
//             method:'post',
//             data:$('#myForm').serialize(),
//             success:(data){
//                 alert(data)
//             }
//         })

// })
 $('#myForm').submit((e)=>{
    // validation code here
   
      e.preventDefault();
        $.ajax({
            url:'layout/ordercode.php',
            method:'post',
            data:$('#myForm').serialize(),
            success:(data)=>{
                // alert(data);
                if(data==1) alert('Order Done!!');
                // window.location = "home.php";
                else alert("Please Login")
            }
        })
    
  });
        
});
</script>