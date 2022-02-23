<?php include "../control/registrationcheck.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/design.css">
</head>
    <title>Sign Up Form</title>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <h1>Sign Up</h1>
       
        First Name  :<input type="text" id="name" name="fname" onkeyup="Name()"><br> <?php echo $validatefname ; ?><p id="error"></p>
        Last Name  :<input type="text" id="lname" name="lname" onkeyup="Lname()"><br><?php echo $validatelname ; ?><p id="lerror"></p>
        Username  :<input type="text" id="name" name="username"><br><?php echo $UsernameErr ; ?>
        Mobile No  :<input type="text" id=mobno name="mobno" onkeyup="Mobile()" ><br><?php echo $validatemobile ; ?><p id="moberr"></p>
        Email  :<input type="text" id="userid" name="email" onkeyup="username()"></p><br><?php echo $validateemail ; ?><p id="error1">
        Password:<input type="text" id="password "name="password" onkeyup="Checkpassword()"><br><?php echo $passErr ; ?><p id="error2"></p>
        <br>
<input type="file" name="filetoupload">
<br>
        <a href="login.php">---------------------------Go back</a><br>
   
      
        <input type="submit" name="submit">
        <script src="../JS/validatelogin.js"></script>  
</body>
</html>