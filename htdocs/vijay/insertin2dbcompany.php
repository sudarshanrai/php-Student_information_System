<?php
 //connecting to the database
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'otaps');
 define('DB_USER','root');
 define('DB_PASSWORD','root');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$sql="INSERT INTO company(cname,type,branch,min_qualification,cgpa,dop,package)
VALUES (
'$_POST[cname]',
'$_POST[type]',
'$_POST[branch]',
'$_POST[min_qualification]',
'$_POST[cgpa]',
'$_POST[dop]',
'$_POST[package]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Your Information Was Successfully Posted";

mysql_close($con);
?>
