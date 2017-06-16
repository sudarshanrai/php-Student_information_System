<html>
<body>
<p>hello</p>
<?php 
		$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db('placement',$con) or die("Failed to connect to MySQL: " . mysql_error());
 $result = mysql_query("count(*) FROM company", $con);
 $name01 = $branch01 = $ten01 = $puc01 = $min_qualification01 = $cgpa01 = $dop01 = $package01 = $loc01 = $detail01 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name01 = test_input($_POST["company"]);
   $branch01 = test_input($_POST["DEPT"]);
   $ten01 = test_input($_POST["ten"]);
   $puc01 = test_input($_POST["puc"]);
   $cgpa01 = test_input($_POST["cgpa"]);
   $dop01 = test_input($_POST["dop"]);
   $package01 = test_input($_POST["package"]);
   $loc01 = test_input($_POST["loc"]);
   $detail01 = test_input($_POST["detail"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$sql="INSERT INTO company(cid,cname,branch,mark1,mark2,min_qualification,dop,package,location,other)
VALUES (
'$result',
'$name01',
'$branch01',
'$ten01',
'$puc01',
'$cgpa01',
'$dop01',
'$package01',
'$loc01',
'$detail01')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  session_start();
  $_SESSION['post']="Your Information Was Successfully Posted";

    header( 'Location: http://localhost/companies.php' ) ;

mysql_close($con);
?>
</body>
</html>
