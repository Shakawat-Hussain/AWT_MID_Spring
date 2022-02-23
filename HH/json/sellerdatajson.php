<?php
   /*	include "../functions/Jsonfunctions.php";
sellerdata();
storedata();*/
	   //Get form data
	   $formdata = array(
	      'FirstName'=> $_POST["fname"],
	      'LastName'=> $_POST["lname"],
          'MobileNo'=> $_POST["mobno"],
	      'Email'=> $_POST["email"],
          'Address'=> $_POST["address"],
	      'SellerId'=> $_POST["sellerid"],
          'Gender'=> $_POST["gender"],
          'hiredate'=> $_POST["hiredate"]

	   );
       $existingdata = file_get_contents('sellerdata.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   
	   if(file_put_contents("sellerdata.json", $jsondata)) {
	        echo "Data successfully saved <br>";
			//header("Location:../view/sellers.php");
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("sellerdata.json");
	 $mydata = json_decode($data);
     
     ?>