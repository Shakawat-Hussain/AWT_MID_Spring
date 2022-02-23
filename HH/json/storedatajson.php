<?php
 

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
          //header("Location:../view/sellers.php");
      }
     else 
          echo "no data saved";

   $values = file_get_contents("storedata.json");
   $storevalues = json_decode($values);


     ?>