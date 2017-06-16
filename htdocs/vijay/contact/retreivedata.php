<?php
 //connecting to the database
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'pro');
 define('DB_USER','root');
 define('DB_PASSWORD','root');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 $data = mysql_query("SELECT contactName FROM contact where contactName='vijay'") 
 or die(mysql_error()); 
 Print "<table  cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Name</th> <td>".$info['contactName'] . "</td> "; 
 Print "<th>mess</th> <td>".$info['message'] . "</td> "; 
 Print "<th>email:</th> <td>".$info['contactEmail'] . " </td></tr>"; 
 } 
 Print "</table>"; 
 ?> 