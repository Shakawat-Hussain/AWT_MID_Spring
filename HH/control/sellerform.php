<?php
include('database.php');
$delerr=$allert=$fname=$lname=$mobile=$addres=$sid=$storeid="";

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Showseller($conobj,"seller");
if($userQuery->num_rows > 0)
{
echo "<table>  <tr><th>FirstName</th><th>LastName</th><th>MobileNo</th><th>StoreId</th><th>Gender</th><th>Hiredate</th><th>Status</th></tr>";
while($row = $userQuery->fetch_assoc())
{
    echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["MobileNo"]."</td><td>".$row["StoreId"]."</td><td>".$row["Gender"]."</td><td>".$row["Hiredate"]."</td><td>Active</td></tr>";
}
echo "</table>";

}
else 
{
    echo "<h3>Table Empty</h3>";
}
$connection->CloseCon($conobj);


if(isset($_POST['Search']))

{
    $sid=$_POST["sellerid"];
   
 $connection = new db();
 $conobj=$connection->OpenCon();
 
 $userQuery=$connection->Searchseller($conobj,$sid);
 
 if ($userQuery->num_rows > 0) {
 
  
     while($row = $userQuery->fetch_assoc()) {
       $fname=$row["FirstName"];
       $lname=$row["LastName"];
       $mobile=$row["MobileNo"];
       $addres=$row["Address"];
       $storeid=$row["StoreID"];
       $sid=$row["SellerId"];
       
       
    
   } 
 }
   else {
     echo "0 results";
   }
   $connection->CloseCon($conobj);
}

if(isset($_POST['Update']))
 {
    $connection = new db();
    echo $_POST["SellerId"];
 $conobj=$connection->OpenCon();
 
    
  
   
    $userQuery=$connection->Updateseller($conobj,$_POST["fname"],$_POST["lname"],$_POST["mobile"],$_POST["addres"],$_POST["storeid"],$_POST["SellerId"]);
    if($userQuery==true)
    {
        echo "Update successful";
        echo $_POST["SellerId"];
        

    }
    else 
    {
        echo "Error";

    }
    $connection->CloseCon($conobj);
 }
 if(isset($_POST['Delete']))
 {
    $connection = new db();
 $conobj=$connection->OpenCon();
 $sid=$_POST["SellerId"];
 
    $userQuery=$connection->Deleteseller($conobj,$sid);
    if($userQuery==true)
    {
        echo "Delete successful";
    }
    else 
    {
        echo "Error";

    }
    $connection->CloseCon($conobj);
 }




 




?>