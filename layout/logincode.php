<?php
session_start();
include('conn.php');
$msg = "";

$email = ($_POST["email"]);

if(isset($_POST['loginbtn']))
{
   if (empty($_POST["email"])) 
   {
      $msg = "Email is required";
   } 
   else 
   {
         // $email = ($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
         echo "Invalid email format";
      }
   }
   if (empty($_POST["password"])) 
   {
      $msg = "Password is required";
   }
   else 
   {
      $password = $_POST["password"];
   }

   $select = " SELECT * FROM user_tbl WHERE mail = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);


   if(mysqli_num_rows($result) > 0)
   {
      $_SESSION['username'] = $email;
      // echo $_SESSION['username'];
      // die;
      echo "<script>alert('Login Successfull!')</script>";
      echo "<script>window.location='../home.php'</script>";
   }
   else
   {
      echo "<script>alert('Invalid Username or Password')</script>";
      echo "<script>window.location='login.php'</script>";
   }

}
else
{
   echo  'Incorrect Email or Password!';
}
?>
