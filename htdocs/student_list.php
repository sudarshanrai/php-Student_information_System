<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>CSS3 Modal Popups | Script Tutorials</title>
        <link href="student_list/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="student_list/css/modal.css" rel="stylesheet" type="text/css" />
    </head>
	<style>
	#scroll{
	 position: absolute;
	 top: 150px;
	 left:500px;
    border: 5px solid gray;
    padding: 5px;
    background: white;
    width: 600px;
    height: 500px;
    overflow-y: scroll;
}   
</style>
   <head>
   <link href="layout.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
        <header>
            <h2>PLACEMENT AT MSRIT</h2>
		<img border="0" src="msrit.jpg" width="70" height="70">
		<h5 align="right"><a href="admin.php" name="back"><font style="font-size:20px;color:red;font-family:Lucida Console">back</font></a></h5>
        </header>

        <!-- panel with buttons -->
        <div class="main">
        <p align="center" style="font-size:20px" >student list</p>
		<table>
		<tr><td>
            <div class="panel">
		<svg width="5000" height="605">
<g>
  <rect x="0" y="05" rx="20" ry="20" width="400" height="604" style="fill:#1E1E1E

;stroke:black;stroke-width:5;opacity:0.8"/>
 <foreignObject x="100" y="20" width="602" height="302">
        <body xmlns="http://www.w3.org/1999/xhtml">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="query1">
 <table width="300" border="0">
  <tr>
    <td height="48">min cgpa</td>
    <td>
	<select name="cgpa">
 <option value="9.5">9.5</option>
 <option value="9.0">9.0</option>
  <option value="8.5">8.5</option>
  <option value="8.0">8.0</option>
    <option value="7.5">7.5</option>
	  <option value="7.0">7.0</option>
	    <option value="6.5">6.5</option>
		  <option value="6.0">6.0</option>
		  <option value="0">ALL</option>
		  </select>
  </tr>
  <tr>
    <td height="55">department</td>
    <td><select name="dept">
      <option value="Mtech">Mtech</option>
      <option value="MBA">MBA</option>
      <option value="CSE">CSE</option>
      <option value="ISE">ISE</option>
      <option value="TCE">TCE</option>
      <option value="ECE">ECE</option>
      <option value="BT">BT</option>
      <option value="MECH">MECH</option>
    </select></td>
  </tr>
  </table>
  <input name="submit1" type="submit" value="submit">
  </form>
        </body>
    </foreignObject>
</g>
</svg>
                
            </div>
<div id="scroll">
		<?php
		$name01 = $usn01 = $email01 = $dept01 = $cgpa01 = $email01 = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		$cgpa01 = test_input($_POST["cgpa"]);
		$name01 = test_input($_POST["dept"]);
		
		}
		function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('placement')  or die(mysql_error());
//$usn1=$_post['usn'];
$query=mysql_query("select * from student; ")  or die(mysql_error());
echo'<fieldset>
		<legend align="center" style="width="28px"><b></b></legend>
<table border="1px" width="200"  cellspacing="10" cellpadding="30" >';
echo '<tr>';
echo '<td><b>NAME</b></td>
    <td><b>USN</b></td>
    <td><b>DEPT</b></td>
    <td><b>SEMISTER</b></td>
	  <td><b>CGPA</b></td>
	  <td><b>EMAIL</b></td>';
while($res=mysql_fetch_array($query)) 
{
if(($res['cgpa']>=$cgpa01)&&($res['branch']==$name01))
{
  echo '<tr>
    <td>'.$res['fname'].'</td>
    <td>'.$res['usn'].'</td>
    <td>'.$res['branch'].'</td>
	  <td>'.$res['sem'].'</td>
	    <td>'.$res['cgpa'].'</td>
    <td>'.$res['email'].'</td>
  </tr>';
}
}
echo'</table>';
?>
		</div>
        </div>
		
		
        <script type="text/javascript">
        function show() { document.getElementById('reas').style.display = 'block'; }
		</script>
    </body>
</html>