<?php include "../control/logincheck.php";
if(isset($_SESSION["username"]))
{
    header("Location:../view/admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/login.css">
</head>
    <title>Sign IN Form</title>
    <body>
       <form name="login" action=""  method="POST">
        <h1>Sign In</h1>
    
<table>
        <tr><th>User Name</th><th>Password</th></tr>
        <tr><td><input type="text" id="userid" name="userid"  placeholder="Enter Userid" onkeyup="username()"></td><td><input type="text" id="password" name="password"  placeholder="Enter password" onkeyup="Checkpassword()"></td></tr>
        <tr><td class="td color"><p id="error1"></p></td><td class="td color"><p id="error2"></p></td></tr>
</table>

        <?php echo $loginerror;?><br>
        
        <input type="submit" name="submit"><br>
        
        <br>
        <?php echo $error;?> <br>
        <h2>New here? register now</h2><br>
       <a href="customersignup.php">Consumer registration</a><br>  
</form>
<script src="../JS/validatelogin.js"></script>
</body>
</html>