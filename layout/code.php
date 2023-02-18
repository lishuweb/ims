<?php 
include('conn.php');
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $address = $_POST["address"];
  $cnumber = $_POST["cnumber"];
  $email = $_POST["email"];

   if (!preg_match("/^[a-zA-Z-' ]*$/",$username))
   {
      echo "<script>alert('Only letters and white space allowed!')</script>";
      echo "<script>window.location='signup.php'</script>";
   } 
   if($password!=$cpassword)
   {
      echo "<script>alert('Password not matched!')</script>";
      echo "<script>window.location='signup.php'</script>";
   }
   if(!preg_match('/^[0-9]{9}+$/', $cnumber)&&(strlen($cnumber) < 9|| strlen($cnumber>9)))
   {
      echo "<script>alert('Contact not matched!')</script>";
      echo "<script>window.location='signup.php'</script>";
   }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
   {
      echo "<script>alert('Email not matched!')</script>";
      echo "<script>window.location='signup.php'</script>";
   }

   else 
   {
      $query = "insert into user_tbl (username,password,address,cnumber,mail) values ('$username','$password','$address','$cnumber','$email')";
      $result = mysqli_query($conn,$query);
      
      if($result)
      {
         echo "<script>alert('Successfully Signed in!')</script>";
         echo "<script>window.location='login.php'</script>";
      }
      else 
      {
         header("location:signup.php");
      }
   }       
}



?>