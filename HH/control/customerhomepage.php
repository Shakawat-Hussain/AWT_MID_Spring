<?php

$cost=$c="";
$a="checkbox";
$b="chkbox";
$d="Price(Event)";

$price="";
include('database.php');

if(empty($_REQUEST["name"]))
{
    echo "enter something";
} else {
$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->Searchproduct($conobj,$_REQUEST["name"]);
if($userQuery->num_rows > 0)
{
    
    echo "<table>  <tr><th>Product id</th><th>Brand</th><th>Model</th><th>Spec</th><th>inStock</th><th>Price</th><th>Category</th><th>OrderNow</th></tr>";
while($row = $userQuery->fetch_assoc())
{
    
    $c=$row["Product_id"];
   // $_SESSION["Product_Id"]=$c;

  //$v=$_SESSION["Product_Id"];
    $chk="<input type=$a id=$b name=$b value=$c onclick=$d>";
    $price=$row["Price"];
    
   
    echo "<tr><td>".$row["Product_id"]."</td><td>".$row["Brand"]."</td><td>".$row["Model_Name"]."</td><td>".$row["Specs"]."</td><td>".$row["Quantity"]."</td><td>".$row["Price"]."</td><td>".$row["Cat_Name"]."</td><td>$chk</td></tr>";
 
}
echo "</table>";

}
else 
{
    echo "<h3>Table Empty</h3>";
}
$connection->CloseCon($conobj);
}



$connection = new db();
$conobj=$connection->OpenCon();

if(empty($_REQUEST["pid"]))
{
    echo "";
} else {
$userQue=$connection->price($conobj,$_REQUEST["pid"]);

if($userQue->num_rows > 0){
while($row = $userQue->fetch_assoc()) 
{
echo $row["Price"];
}
}
else {
    echo "0 results";
  }
  $connection->CloseCon($conobj);
}


$Date=date("d/m/Y");

if(isset($_POST['order'])){
$connection = new db();
$con=$connection->OpenCon();

//$v=$_SESSION["Product_Id"];
$u=$_SESSION["un"];
   // $c=$_REQUEST["pid"];
    $sql="Insert into orders (Date,Username,Product_Id,Status,Delivery_Date) Values('$Date','$u','$c','Pending','')"; //c value in line 26
 
 
 if ($con->query($sql)==true)
 {
     echo "New record created";
 } else
 {
echo "Error: ".$sql."   ".$con->error;
 }
 $connection->CloseCon($conobj);
}

?>