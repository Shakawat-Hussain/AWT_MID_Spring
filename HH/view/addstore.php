<?php include "../control/checkstore.php";

session_start();
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); 
}
?>
<!-- ?php include "../json/storedatajson.php"; ? -->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/design.css">
</head>
    <title>Add Store</title>
    <body>
        <p>Add New Store</p>
        <form action="" method="POST"> <!--../json/dataprocess.php-->
        </p>Store Details</p><br>
Store License No.: <input type="text" name="storelicense"><?php echo $storelicenseErr; ?>----- Store Name:<input type="text" name="storename"><br>
<br>
---------------- City: <input type="text" name="city">---------- District:<input type="text" name="district"><br>
<br>
--------Postal Code:<input type="text" name="postal">----------Store ID:<input type="text" name="storeid"><br>

-----StoreLocation: <textarea id="storelocation" name="storelocation" row="40" col="10"></textarea><br>

<br>

<input type="submit" name="submit"><br>
<a href="admin.php">---------------------------Go back</a><br>
<br>
<a href="../control/logout.php">Logout</a><br>
</form>
</body>
</html>