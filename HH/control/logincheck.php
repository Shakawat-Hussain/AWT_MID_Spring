<?php

include('database.php');
session_start();
$username=$password=$loginerror=$error="";

if(isset($_POST['submit']))
    
    {
       if($_REQUEST["userid"]=="admin" && $_REQUEST["password"]=="4568898")
        {
            $_SESSION['username']=$_POST['userid'];
          $_SESSION['password']=$_POST['password'];
header("Location:../view/admin.php");
    } 
    else if (empty($_POST["userid"]) || (empty($_POST["password"]))) 
    {
        $loginerror="Invalid Username or password";
    } else  {
        $username=$_POST['userid'];
        $password=$_POST['password'];
        
        $connection = new db();
        $conobj=$connection->OpenCon();
        
        $userQuery=$connection->CheckUser($conobj,"login",$username,$password);
        
        if ($userQuery->num_rows > 0) {
         
         
          header("Location:../view/consumer.php");
          
          $_SESSION['un']=$_POST['userid'];
          $_SESSION['pw']=$_POST['password'];
           }
         else {
            $error="User details can't be found";
        }
        $connection->CloseCon($conobj);

    }
    

}
 
?>
