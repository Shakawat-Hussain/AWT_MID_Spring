<?php
session_start(); 
include "../control/customerhomepage.php";
if(empty($_SESSION["un"])) 
{
  header("Location: ../view/login.php");  
}

?>


<!DOCTYPE html>
<html>
<title>Consumer profile</title>
<head>
<link rel="stylesheet" href="../css/design.css">
</head>
    
    <body>
      <h1>Welcome <?php echo $_SESSION["un"]; ?></h1>
      <ul>
  <li><a href="#home">My Orders</a></li>
  <li><a href="#news">Cart</a></li>
  <li><a href="#contact">Compare</a></li>
  <li style="float:right"><a class="active" href="../control/logout.php">Logout</a></li>
</ul>
<form method="POST">
      <h1>Search Items</h1> 
      
      <input type="text" id="name" name="name" onkeyup="Search()" placeholder="Enter Item"><br>
      <h2 id="show"></h2>
      
      <input type="checkbox"  id="con" name="con" value="confirmed">
<label for="con">Total Cost: <p id="print" ></p></label><br>

      <input type="submit" name="order" value="order"><br>
</form>
      
      
      <script src="../JS/ajaxsearch.js" >
        </script>
</body>
</html>