<?php
$validatemobile=$validateradio=$validate=$validateemail=$validatelname=$validatefname=$selleriderr="";
$fname=$lname=$email=$gender=$mobileno=$address=$sellerid=$storeid=$hiredate=$storelicense=$city=$district=$Postal=$Strlocation="";
if(isset($_POST['submit']))
//if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])>8))
{
    $validatefname= "you must enter name";

}
else
{
    $fname=$_REQUEST["fname"];
}
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])>8))
{
    $validatelname= "you must enter name";

}
else
{
    $lname=$_REQUEST["lname"];
}
if(empty($_REQUEST["mobno"]) || (strlen($_REQUEST["mobno"])>11) || (is_int($_REQUEST["mobno"])))
{
    $validatemobile="incorrect Mobile number formate";
}
else {
    $mobileno=$_POST["mobno"];
}
if (empty($_POST["email"])) {
    $validateemail = "Email is required";
  } else {
    $email = $_POST["email"];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $validateemail = "Invalid email format";
    }
  }

  $address=$_POST["address"];
  if(is_int($_REQUEST["sellerid"]))
  {
    $selleriderr="Wrong id format";
  } else {
    $sellerid=$_POST["sellerid"];
  }
$storeid=$_REQUEST["storeid"];

if(isset($_REQUEST["gender"]))
{
    $gender= $_REQUEST["gender"];
}
else{
    $validateradio= "please select at least one radio";
}
$hiredate=$_POST["hiredate"];


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
$sql="INSERT INTO seller ()
 Values('$fname','$lname','$mobileno','$email','$address','$sellerid','$storeid','$gender','$hiredate')";
 
 if ($con->query($sql)==true)
 {
     echo "New record created";
 } else
 {
echo "Error: ".$sql."   ".$con->error;
 }


 $con->close();

}

$target_dir = "../files/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];



	if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo $_FILES["filetoupload"]["type"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }



}

?>