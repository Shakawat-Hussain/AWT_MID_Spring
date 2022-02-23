<?php
$cost="";
include('database.php');

if(empty($_REQUEST["pid"]))
{
    echo "enter something";
} else {
$connection = new db();
$conobj=$connection->OpenCon();

$userQue=$connection->price($conobj,$_REQUEST["pid"]);

if($userQue->num_rows > 0){
while($row = $userQue->fetch_assoc()) 
{
$cost=$row["Price"];
}
}
else {
    echo "0 results";
  }
?>