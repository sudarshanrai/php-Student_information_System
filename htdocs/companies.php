<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>CSS3 Modal Popups | Script Tutorials</title>
        <link href="student_list/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="student_list/css/modal.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h2>PLACEMENT AT MSRIT</h2>
		<img border="0" src="msrit.jpg" width="70" height="70">
        </header>
		<p style="font-family:arial;color:green;font-size:20px;text-align:center"><?php  	session_start();  if(!isset($_SESSION['post']))
 {
 
	echo "";
}
else
{	
echo $_SESSION['post'];
unset($_SESSION['post']); 
}

?></p>
		<h5 align="right"><a href="admin.php" name="back"><font style="font-size:20px;color:red;font-family:Lucida Console">back</font></a></h5>

        <!-- panel with buttons -->
        <div class="main">
        <p align="center" style="font-size:20px" >company details</p>
            <div class="panel">
		<svg width="5000" height="705">
<g>
  <rect x="370" y="50" rx="20" ry="20" width="604" height="604" style="fill:#1E1E1E

;stroke:black;stroke-width:5;opacity:0.8"/>
 <foreignObject x="550" y="50" width="602" height="604">
        <body xmlns="http://www.w3.org/1999/xhtml">
		<form action="query1.php" method="post">
 <table width="386" border="0">
  <tr>
    <td width="133" height="48">company name</td>
    <td width="243">
      <input type="text" name="company" id="company1">      
  </tr>
  <tr>
    <td height="48"> cgpa cutoff</td>
    <td>
	<select name="cgpa">
 <option value="9.5">9.5</option>
 <option value="9">9.0</option>
  <option value="8.5">8.5</option>
  <option value="8">8.0</option>
    <option value="7.5">7.5</option>
	  <option value="7">7.0</option>
	    <option value="6.5">6.5</option>
		  <option value="6">6.0</option>
		  <option value="0">ALL</option>
		  </select>
  </tr>
  <tr>
    <td height="47"><p>date of placement</p></td>
    <td><input type="date" id="dop" name="dop"/></td>
  </tr>
  <tr>
    <td height="47"><p>10th % cutoff</p></td>
    <td><input type="number" min="10" max="100" id="10th" name="ten"/></td>
  </tr>
  <tr>
    <td height="55">department</td>
    <td><p>
      <select name="DEPT" id="DEPT">
        <option value="CSE">CSE</option>
        <option value="ISE">ISE</option>
        <option value="EC">EC</option>
        <option value="BT">BT</option>
        <option value="TC">TC</option>
        <option value="IT">IT</option>
        <option value="MECH">MECH</option>
      </select>
      <label for="company"></label>
    </p></td>
  </tr>
  <tr>
    <td height="63">deploma OR puc cutoff in %</td>
    <td><p>&nbsp;</p>
  <input type="number" min="10" max="100" name="puc" id="puc">
      </p></td>
  </tr>
  <tr>
    <td height="63">package</td>
    <td><input type="number" name="package" id="package">
      <label for="salary">per annum</label></td>
  </tr>
  <tr>
    <td height="63">location(bangalore?):</td>
    <td><p>
      <label>
        <input type="radio" name="loc" value="bangalore" id="RadioGroup1_0">
        YES </label>
      <br>
      <label>
        <input type="radio" name="loc" value="not_bangalore" id="RadioGroup1_1">
        NO </label>
      <br>
      <br />
    </p></td>
  </tr>
  <tr>
    <td height="63">any other details:</td>
    <td><textarea name="detail" id="detail"></textarea></td>
  </tr>
  </table>
  <input name="submit" type="submit" value="submit">
  </form>
        </body>
    </foreignObject>
</g>
</svg>
                
            </div>

        </div>
        
		<script type="text/javascript">
        function show() { document.getElementById('reas').style.display = 'block'; }
		</script>
    </body>
</html>