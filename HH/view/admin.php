<?php session_start();
 if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}
?>
<?php include "../control/adp.php" ?>
<!DOCTYPE html>
<html>
    <form action="" method="POST">
    <title>Supervisor</title>
    <head>
<link rel="stylesheet" href="../css/admin.css">
</head>
    <body>
        <h1>Control Category</h1>
        <ul>
  <li><a href="#home">Customers</a></li>
  <li><a href="#news">Products</a></li>
  <li><a href="#news">Orders</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sellers</a>
    <div class="dropdown-content">
      <a href="../view/addseller.php">Add</a>
      <a href="../view/sellers.php">Search</a>
      <a href="../view/sellers.php">Update</a>
    </div>
  </li>
</ul>
     <h2>Add New<h2>   
<select name="powermenu" id="pmu">
  <option value="sellers">Seller</option>
  <option value="store">Store</option>
  <option value="customers">Customers</option>
  <option value="delivery">Delivery Team</option>
</select>
<input type="submit" name="submit"><br>
<a href="../control/logout.php">Logout</a><br>
</form>
</body>
</html>