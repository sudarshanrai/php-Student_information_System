 <?php
 $i=0;
	$err="invalid login";
// define variables and set to empty values
$login1 = $password1 = $gender = $comment = $website = $loginerr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $login1 = test_input($_POST["login"]);
   $password1 = test_input($_POST["password"]);
}
if($login1=="admin"&&$password1=="admin@msrit")
{
$i=1;
header( 'Location: http://localhost/admin.php' ) ;
}
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('placement')  or die(mysql_error());
//$usn1=$_post['usn'];
$query=mysql_query("select * from  login;")  or die(mysql_error());
if((!empty($login1))&&(!empty($password1)))
{
session_start();
while($res=mysql_fetch_array($query)) 
{
	if(($res['usn']==$login1)&&($res['password']==$password1))
	{
	$i=1;
    $_SESSION['name'] = $res['firstname'];
	$_SESSION['USNF'] = $res['usn'];
		header( 'Location: http://localhost/main.php' ) ;
	}
	
}
}
if($i==0)
{
$_SESSION['err']="Invalid Login";
	header( 'Location: http://localhost/login.php' ) ;
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>