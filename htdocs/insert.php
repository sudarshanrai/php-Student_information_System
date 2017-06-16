<html>
<head>
<title>Book-O-Rama Book Entry Results</title>
</head>
<body>
<h1>Book-O-Rama Book Entry Results</h1>
<?php
// create short variable names
$usn=$_POST['usn'];
$pass=$_POST['pass'];
$first=$_POST['firstname'];
$last=$_POST['lastname'];
if (!$usn || !$pass || !$first || !$last)
{
echo 'You have not entered all the required details.<br />'
.'Please go back and try again.';
exit;
}
$usn = addslashes($usn);
$pass = addslashes($pass);
$first = addslashes($first);
$last = doubleval($last);
@ $db = mysql_pconnect('localhost', 'root', '');
if (!$db)
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
mysql_select_db('placement');
$query = "insert into login values
('".$usn."', '".$first."', '".$last."', '".$pass."')";
$result = mysql_query($query);
if ($result)
echo mysql_affected_rows().' book inserted into database.';
?>
</body>
</html>