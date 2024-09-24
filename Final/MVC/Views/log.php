<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
</head>
<body>

    <h1>Login Page</h1>

    <form method="post" action="../Controllers/logCheckController.php">
       	 Id: <input type="text" name="id"><br>
   		 Pass:<input type="text" name="pass"><br>
   		 <?php
   		 if(isset($_SESSION['Error']))
   		 {
              echo $_SESSION['Error'];
   		    unset($_SESSION['Error']);
   		 }
   		  
   		 ?>
    	<button name="btn">Login</button>
   </form>
</body>
</html>