<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="utf-8" />
        <title>CSS3 Modal Popups | Script Tutorials</title>
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/modal.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h2>PLACEMENT AT MSRIT</h2>
		<img border="0" src="msrit.jpg" width="70" height="70">
        </header>

        <!-- panel with buttons -->
        <div class="main">
            <div class="panel">
		<svg width="1000" height="1000">
<g>
  <rect x="370" y="50" rx="20" ry="20" width="604" height="304" style="fill:#1E1E1E

;stroke:black;stroke-width:5;opacity:0.8"/>
 <foreignObject x="550" y="50" width="602" height="302">
        <body xmlns="http://www.w3.org/1999/xhtml">
        <form action="mail.php" method="post"  >
 <table width="300" border="0" align="center">
  <tr>
    <td height="61"><font color="white" >select company</font></td>
    <td><select name="select" >
	<?php
	mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('placement')  or die(mysql_error());
//$usn1=$_post['usn'];
$query=mysql_query("select * from company ORDER BY cname ASC ; ")  or die(mysql_error());
while($res=mysql_fetch_array($query)) 
{
 print "<option value=".$res['cname'].">".$res['cname']."</option>";
}
	?>
    </select></td>
  </tr>
  </table>
  <input  type="submit" value="submit" >
  </form>
        </body>
    </foreignObject>
</g>
</svg>
                
            </div>

        </div>

        
        </div>
	
    </body>
</html>