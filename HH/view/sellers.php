<?php
include "../control/sellerform.php";
 session_start();
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

  <body>


<br>
<br>

<h1>Search Seller</h1> 



<br>
<form action="" method="POST">
 
<input type="text" name="sellerid">
<input type="submit" name="Search" value="Search"><br>
<?php echo $delerr; ?>
<br>
</form>
<h2>Update Seller</h2> 

<form method="post" action="">
<table>
  <tr><th class="th black">Name</th><th class="th black">Lame</th><th class="th black">Mobile</th><th class="th black">Address</th><th class="th black">Storeid</th><th>Sellerid</th></tr>
  <tr><td  class="td calar"><input type="text" name="fname" value="<?php echo $fname; ?>"></td><td class="td calar"><input type="text" name="lname" value="<?php echo $lname; ?>"></td><td class="td calar"><input type="text" name="mobile" value="<?php echo $mobile; ?>"></td><td class="td calar"><input type="text" name="addres" value="<?php echo $addres; ?>"></td><td class="td calar"><input type="text" name="storeid" value="<?php echo $storeid; ?>"></td><td class="td calar"><input type="text" name="SellerId" value="<?php echo $sid; ?>"></td></tr>
</table>




<!--input type="text" name="sellid" --> <br>
<tr><td><input type="submit" name="Update" value="Update"></td><td><input type="submit" name="Delete" value="Delete"></td></tr>
</form>
</table>

<br>
<a href="admin.php">Go back</a><br>
<br>
<a href="../control/logout.php">Logout</a><br>

</body>
</html>