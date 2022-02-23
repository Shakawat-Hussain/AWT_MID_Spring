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
			header("Location:../view/sellers.php");
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("sellerdata.json");
	 $mydata = json_decode($data);

	 $store = array(
        'LicenseNo'=> $_POST["storelicense"],
        'StoreName'=> $_POST["storename"],
        'City'=> $_POST["city"],
        'Zela'=> $_POST["district"],
        'PostalCode'=> $_POST["postal"],
        'StoreId'=> $_POST["storeid"],
        'Location'=> $_POST["storelocation"]
        

     );
     $existing = file_get_contents('storedata.json');
     $temp = json_decode($existing);
     $temp[] =$store;
     //Convert updated array to JSON
     $storejson = json_encode($temp, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents("storedata.json", $storejson)) {
          echo "Data successfully saved <br>";
          header("Location:../view/sellers.php");
      }
     else 
          echo "no data saved";

   $values = file_get_contents("storedata.json");
   $storevalues = json_decode($values);


     ?>