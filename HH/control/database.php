<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "compalace";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $username."' Or Email='". $username."' AND Password='". $password."'");
 return $result;
 }
function showcategory($conn,$nam)
{
    $result = $conn->query("SELECT Cat_Id,Cat_Name FROM  category WHERE Cat_Name='".$nam."'");
 return $result;
}
function Searchseller($conn,$id)
{
    $result = $conn->query("SELECT s.FirstName,s.LastName,s.MobileNo,s.Address,s.StoreID,s.SellerId FROM  Seller s where SellerId='".$id."'");
    return $result;
}
function Updateseller($conn,$fname,$lname,$mob,$addr,$strid,$id)
{
    $result = $conn->query("UPDATE seller SET FirstName='".$fname."',LastName='".$lname."',MobileNo='".$mob."',Address='".$addr."',StoreID='".$strid."' WHERE SellerId='".$id."'");
    return $result;
}
function deleteseller($conn,$id)
{
    $result = $conn->query("Delete  from seller  WHERE SellerId='".$id."'");
    return $result;
}
function Searchproduct($conn,$nam)
{
    $result = $conn->query("SELECT p.Product_id, p.Brand, p.Model_Name, p.Specs, p.Quantity, p.Price, c.Cat_Name FROM  Products p,category c where p.Cat_Id=c.Cat_Id AND c.Cat_Name='".$nam."'");
    return $result;
}


/*function Addorder($conn,$pid)
{
    $result = $conn->query("Insert into orders");
    return $result;
}*/
function price($conn,$pid)
{
    $result = $conn->query("SELECT Price FROM  products WHERE Product_id='".$pid."'");
    return $result;
}

function Updateproduct($conn,$ID)
{
    $result = $conn->query("SELECT p.Product_id, p.Brand, p.Model_Name, p.Specs, p.Quantity, p.Price, c.Cat_Name FROM  Products p,category c where p.Cat_Id=c.Cat_Id AND c.Cat_Id='".$ID."'");
    return $result;
}
 function Showseller($conn,$table)
 {
$result = $conn->query("SELECT FirstName,LastName,MobileNo,StoreId,Gender,Hiredate FROM  $table");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>