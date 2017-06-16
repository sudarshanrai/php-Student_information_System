<?php
$con = mysql_connect('localhost','root','') or die(mysql_error());
$db=mysql_select_db('placement',$con)  or die(mysql_error());
//$usn1=$_post['usn'];
$query=mysql_query("select * from  login; ")  or die(mysql_error());
$name01 = $branch01 = $ten01 = $puc01 = $min_qualification01 = $cgpa01 = $dop01 = $package01 = $loc01 = $detail01 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{    $name01 = test_input($_POST["login"]);
    $branch01 = test_input($_POST["password1"]);
   $ten01 = test_input($_POST["password2"]);
   $puc01 = test_input($_POST["firstname"]);
   $cgpa01 = test_input($_POST["lastname"]);
   $dop01 = test_input($_POST["email"]);
}
session_start();
while($res=mysql_fetch_array($query)) 
{
if($name01==$res['usn'])
{
$_SESSION['err']="login already exists!";
header( 'Location: http://localhost/login.php' ) ;
}
else if($branch01==$ten01)
{
$sql="INSERT INTO login(usn,password,rpass,firstname,lastname,email)
VALUES (
'$name01',
'$branch01',
'$ten01',
'$puc01',
'$cgpa01',
'$dop01')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
  $_SESSION['name']=$puc01;
  $_SESSION['USN']=$name01;
  header( 'Location: http://localhost/main.php' ) ;
  }
}
else
{
$_SESSION['err']="password mismatch";
header( 'Location: http://localhost/login.php' ) ;
}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>