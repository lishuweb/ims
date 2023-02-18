<?php

include('conn.php');

session_start();

if(isset($_POST['submit']))
{
   if (empty($_POST["username"])) 
   {
      echo "Email is required";
   } 
   else 
   {
      $username = $_POST["username"];
   }

   if (empty($_POST["password"])) 
   {
      echo "Password is required";
   }
   else 
   {
      $password = $_POST["password"];
   }
   

   $query = "SELECT * FROM admin_login WHERE admin_name='$username' AND admin_password='$password'";
   $result = mysqli_query($conn, $query);
   if(mysqli_num_rows($result)==1)
   {
      session_start();
      $_SESSION['AdminLoginId']==$username;
      header('Location:admin.php');
   }
   else 
   {
      echo "<script>alert('Invalid username or password')</script>";
      echo "<script>window.location='loginadmin.php'</script>";
   }
}

?>
