<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <div class="forms">
        <h2>Sign in</h2>
        <form name="myForm" action="code.php"  method="post">

            <input id="text1" type="text" name="username" placeholder="Full Name" required="">
            <br><br>
            <input id="text1" type="password" name="password" placeholder="Password" required="">
            <br><br>
            <input id="text1" type="password" name="cpassword" placeholder="Confirm Password" required="">
            <br><br>
            <input id="text1" type="text" name="address" placeholder="Address" required="">
            <br><br>
            <input id="text1" type="number" name="cnumber" placeholder="Contact number" required="">
            <br><br>
            <input id="text1" type="email" name="email" placeholder="Email  eg. a@a.com" required="">
            <br><br>
           
           
            <input type="submit" value="Sign In" name="submit"> 
            <h6>Already have an account?<a href="login.php">Login</a></h6>
        </form>
    </div>

</body>
</html>