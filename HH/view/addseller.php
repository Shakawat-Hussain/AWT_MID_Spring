<?php session_start();
include "../control/checkaddseller.php";
 if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/design.css">
</head>
    <title>Add Sellers</title>
    <body>
        <h1>Add New Seller</h1>
        <form action="" method="POST"> <!--../json/dataprocess.php-->
First name: <input type="text" id="name" name="fname" onkeyup="Name()"><p id="error"></p> <?php echo $validatefname; ?>Last name: <input type="text" name="lname" onkeyup="Lname()"><p id="lerror"></p> <?php echo $validatelname; ?>
<br>
Mobile No: <input type="text" id=mobno name="mobno" onkeyup="Mobile()"><p id="moberr"></p><?php echo $validatemobile; ?> Email: <input type="text" id="userid" name="email" onkeyup="username()"><p id="error1"></p> <?php echo $validateemail; ?>
<br><br>
Address: <textarea id="address" name="address" row="40" col="10"></textarea><br>
Assign ID: <input type="text" name="sellerid"> <?php echo  $selleriderr; ?> <br> 
Gender:
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <br>
  <?php echo $validateradio; ?>
  DateAssigned:<input type="datetime-local"  name="hiredate">
<br>
Store ID:<input type="text" name="storeid"><br>

<br>
<input type="submit" name="submit"><br>
<a href="admin.php">Go back</a><br>
<br>
<a href="../control/logout.php">Logout</a><br>
</form>
<script src="../JS/validatelogin.js"></script>
</body>
</html>