<?php
$cityerr=$districterr=$postalerr=$storelicenseErr=$nameerr="";
$storelicense=$storename=$city=$district=$postal=$Storeid=$Strlocation="";
if(isset($_POST['submit']))
//if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(!is_int($_REQUEST["storelicense"]))
{
    $storelicense=$_POST["storelicense"];
} else {
    $storelicenseErr="Wrong format. check input type";
    
}
if(empty($_REQUEST["storename"]))
{
$nameerr="Name can't be empty";
}
else {
    $storename=$_REQUEST["storename"];
}
if(empty($_REQUEST["city"]))
{
$cityerr="City can't be empty";
}
else {
    $city=$_REQUEST["city"];
}
if(empty($_REQUEST["district"]))
{
$districterr="City can't be empty";
}
else {
    $district=$_REQUEST["district"];
}
if(is_int($_REQUEST["postal"]) || (empty($_REQUEST["postal"])))
{
    $Postal=$_REQUEST["postal"];
}
else {
    $postalerr="Only integer Formate and cant be empty";
}

$Storeid=$_REQUEST["storeid"];
$Strlocation=$_REQUEST["storelocation"];

$servername="localhost";
$username="root";
$password="";
$dbname="compalace";
$con=new mysqli ($servername,$username,$password,$dbname);
if($con->connect_error)
{
  die("Connection Failes:".$con->connect_error)  ;
}
else {
$sql="INSERT INTO store ()
 Values('$storelicense','$storename','$city','$district','$Postal','$Storeid','$Strlocation')";
 
 if ($con->query($sql)==true)
 {
     echo "New record created";
 } else
 {
echo "Error: ".$sql."   ".$con->error;
 }


 $con->close();

}





}
?>