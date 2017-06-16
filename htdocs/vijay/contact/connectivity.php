<?php
 //connecting to the database
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'pro');
 define('DB_USER','root');
 define('DB_PASSWORD','root');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 //inserting Record to the database
 $name = $_POST['name'];
 //$email = $_POST['email'];
 $message = $_POST['message'];
 $email = mysql_real_escape_string($_POST['email'],);
 $query = "INSERT INTO contact(contactName,contactEmail,message)VALUES('$name','$email','$message')"; 
 $result = mysql_query($query);
 if($result) { echo "Successfully updated database"; 
 } else { die('Error: '.mysql_error($con));
 } mysql_close($con); 
 ?>
