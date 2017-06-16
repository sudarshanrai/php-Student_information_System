<html>
<head>
<meta charset="utf-8" />
        <link href="form1/css/layout.css" rel="stylesheet" type="text/css" />
       <!-- <link href="form/css/modal.css" rel="stylesheet" type="text/css" />--> 
<!--	 <link href="form.css" rel="stylesheet" type="text/css" />	-->
<title> ONLINE APPLICATION FORM</title>
<style>
header img
{
left:0px;
top:10px;
}
</style>
 </head>
<body>
  <header>
  <h1>M.S. Ramaiah Institute of Technology</h1>
<img  src="msrit.jpg" width="70" height="60"/>
</header>
 <h6>COMPANY LIST:</h6>
<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('placement')  or die(mysql_error());
//$usn1=$_post['usn'];
$query=mysql_query("select * from company; ")  or die(mysql_error());
echo'<fieldset>
		<legend align="center" style="width="25px"><b></b></legend>
<table border="1px" width="300"  cellspacing="5" cellpadding="10" >';
echo '<tr>';
echo '<td><b>COMPANY_ID</b></td>
    <td><b>NAME</b></td>
    <td><b>BRANCH</b></td>
	  <td><b>1OTH cutoff(%)</b></td>
	    <td><b>PUC cutoff(%)</b></td>
    <td><b>CGPA cutoff</b></td>
    <td><b>DATE OF PLACEMENT</b></td>
    <td><b>PACKAGE</b></td>
	  <td><b>LOCATION</b></td>
	    <td width="70%"><b>______OTHER___DETAILS_______</b></td>';
while($res=mysql_fetch_array($query)) 
{
  echo '<tr>
    <td>'.$res['cid'].'</td>
    <td>'.$res['cname'].'</td>
    <td>'.$res['branch'].'</td>
	  <td>'.$res['mark1'].'</td>
	    <td>'.$res['mark2'].'</td>
    <td>'.$res['min_qualification'].'</td>
    <td>'.$res['dop'].'</td>
    <td>'.$res['package'].'</td>
	    <td>'.$res['location'].'</td>
		<td>'.$res['other'].'</td>
  </tr>';
}
echo'</table>';
?>
</body>
</html>