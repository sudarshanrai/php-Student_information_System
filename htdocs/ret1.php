<html>
<head>
<meta charset="utf-8" />
        <link href="form/css/layout.css" rel="stylesheet" type="text/css" />
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
 <h6 align="center">ONLINE PLACEMENT REGISTRATION FORM</h6>
<?php
$q=0;
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('placement')  or die(mysql_error());
//$usn1=$_post['usn'];
$query=mysql_query("select * from student; ")  or die(mysql_error());
echo'<fieldset>
		<legend align="center" style="width="18px"><b>GENERAL DETAILS</b></legend>
<table border="0px" >';
while($res=mysql_fetch_array($query)) 
{
if($res['usn']==($_POST["USN2"]))
{
$q=1;
  echo'<tr><td><b>Firstname:</b>'.
  $res['fname'].
  '</td><td></td><td><b>Lastname:</b>'.
  $res['lname'].
  '</td></tr><tr><td><b>Date Of Birth:</b>'.
  $res['dob'].
  '</td><td>&nbsp;&nbsp;&nbsp;</td><td><b>Sex:</b>'.
  $res['sex'].
  '</td></tr><tr><td><b>Father name:</b>'.
  $res['fathername'].
  '</td></tr><tr><td><b>Occupation:</b>'.
  $res['foccu'].
  '</td></tr><tr><td><b>Office Address:</b>'.
  $res['faddr'].
  '</td></tr><tr><td><b>Mother name:</b>'.
  $res['mothername'].
  '</td></tr><tr><td><b>Occupation:</b>'.
  $res['foccu'].
  '</td></tr><tr><td><b>Office Address:</b>'.
  $res['faddr'].
  '</td></tr>';
 
 echo'<tr><td><b>Email:</b>'.
  $res['email'].'</td><td>
  </td><td>&nbsp;&nbsp;&nbsp;</td></tr><tr><td><b>USN:</b>'.
  $res['usn'].
  '</td></tr><tr><td><b>Sem:</b>'.
  $res['sem'].
  '</td><td>&nbsp;&nbsp;&nbsp;</td><td><b>Branch:</b>'.
  $res['branch'].
  '</td></tr><tr><td><b>Year Of Passing:</b>'.
  $res['yearofpassing'].
  '</td></tr><tr><td><b>Occupation:</b>'.
  $res['foccu'].
  '</td></tr><tr><td><b>Office Address:</b>'.
  $res['faddr'].
  '</td></tr>';
  echo'</table></fieldset>';
echo'<fieldset>
		<legend align="center" style="width="18px"><b>EDUCATIONAL DETAILS</b></legend>
<table border="0" >';
  
  echo'<b>Pre-Degree Details:</b>';
  echo'<table border="1" style=" border:1px solid #D6D6D6">
<tr>
<th>course</th>
<th>board</th>
<th>institution studied</th>
<th>%marks</th>
<th>month/year of passing</th>
<th>no of attempts</th>
</tr>
<tr>
<td>TENTH</td><td>'.
$res['teboard'].
'</td><td>'.
$res['teinst'].
'</td><td>'.
$res['teperc'].
'</td><td>'.
$res['teyop'].
'</td><td>'.
$res['tenoa'].
'</td></tr>
<tr>
<td>12th</td><td>'.
$res['twboard'].
'</td><td>'.
$res['twinst'].
'</td><td>'.
$res['twperc'].
'</td><td>'.
$res['twyop'].
'</td><td>'.
$res['twnoa'].
'</td></tr>
<tr>
<td>DIPLOMA</td><td>'.
$res['dboard'].
'</td><td>'.
$res['dinst'].
'</td><td>'.
$res['dperc'].
'</td><td>'.
$res['dyop'].
'</td><td>'.
$res['dnoa'].
'</td></tr>';
echo'</table>';
echo'<b>Semister Wise SGPA</b>';
  echo'<table border="1" style=" border:1px solid #D6D6D6">
<tr>
<th>sem</th>
<th>sgpa</th>
<th>year of passing</th>
</tr>
<tr>
<td>1<sup>st</sup></td><td>'.
$res['sem1'].
'</td><td>'.
$res['yr1'].
'</td></tr>
<tr>
<td>2<sup>nd</sup></td><td>'.
$res['sem2'].
'</td><td>'.
$res['yr2'].
'</td></tr>
<tr>
<td>3<sup>rd</sup></td><td>'.
$res['sem3'].
'</td><td>'.
$res['yr3'].
'</td></tr>
<tr>
<td>4<sup>th</sup></td><td>'.
$res['sem4'].
'</td><td>'.
$res['yr4'].
'</td></tr>
<tr>
<td>5<sup>th</sup></td><td>'.
$res['sem5'].
'</td><td>'.
$res['yr5'].
'</td></tr>
<tr>
<td>6<sup>th</sup></td><td>'.
$res['sem6'].
'</td><td>'.
$res['yr6'].
'</td></tr>
<tr>
<td>7<sup>th</sup></td><td>'.
$res['sem7'].
'</td><td>'.
$res['yr7'].
'</td></tr>
<tr>
<td>8<sup>th</sup></td><td>'.
$res['sem8'].
'</td><td>'.
$res['yr8'].
'</td></tr>
</table>
<table>
<tr><td>CGPA upto:'.
$res['semno'].
'</td><td>Semester:'.
$res['cgpa'].
'</td></tr>'
;
echo'<tr><td><b>Any year gap in education:</b>&nbsp;&nbsp;'.
  $res['yeargap'].
  '</td><td></td><td>'.
  $res['reason'].
  '</td></tr>
  <tr><td><b>Any plans for higher education:</b>&nbsp;&nbsp;'.
  $res['highedu'].
  '</td><td></td><td>'.
  $res['highreas'].
  '</td></tr>
  <tr><td><b>Any location prefrence for job:</b>&nbsp;&nbsp;'.
  $res['jobpref'].
  '</td><td></td><td>'.
  $res['prefreas'].
  '</td></tr>';
  echo'<p><b>COMPUTER KNOWLEDGE/PROJECTS/ANY OTHER CO-CURRICULAR ACTIVITIES:</b></p>';
  echo'<tr><td>'.
  $res['extrainfo'].
  '</td></tr>';
    echo'</table></fieldset>';
echo'<fieldset>
		<legend align="center" style="width="18px"><b>OTHER DETAILS</b></legend><table>';

  
  echo'<tr><td><b>category:</td><td>'.
  $res['category'].
  '</td><td><b>physically handicapped:</b>'.
  $res['handicapped'].
  '</td></tr><tr><td><b>Height:</b>'.
  $res['height'].
  'cm</td></tr><tr><td><b>Weight:</b>'.
  $res['weight'].
  'kg</td></tr><tr><td><b>Eye Sight:</b></td><td>left'.
  $res['lefteye'].
  '</td><td>right'.
  $res['righteye'].
  '</td></tr></table>';
  echo'<b>Address for Communication</b>';
  echo'<table><tr><td>'.
  $res['commuaddr'].
  '</td></tr>';
  echo'<tr><td><b>Telephone no:</b>'.
  $res['tel'].
  '</td></tr></table>';
    echo'</table></fieldset>';
}
  }
  if($q==0)
  {
  echo "form not found";
  }
  
  ?>
</body>
</html>