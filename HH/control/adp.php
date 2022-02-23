<?php

if(isset($_POST['submit']))
//if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($_REQUEST["powermenu"]=="sellers"){
        header("Location:../view/addseller.php");
    }
elseif ($_REQUEST["powermenu"]=="store"){

header("Location:../view/addstore.php"); 
}
    else {
        header("Location:../view/admin.php");
    }
}
//}

?>
