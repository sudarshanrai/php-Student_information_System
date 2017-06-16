<html>
<body>
<?php
$name=$_POST['login'];
$password1=$_POST['password'];
if(($name=="admin")&&($password1=="admin@msrit26"))
{
header( 'Location: http://localhost/admin.php' ) ;
}
{
	header( 'Location: http://localhost/main.php?suddu='.$name.'' ) ;
}

?>
</body>
</html>