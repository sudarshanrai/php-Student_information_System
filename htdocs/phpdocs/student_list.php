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

        <!-- panel with buttons -->
        <div class="main">
        <p align="center" style="font-size:20px" >student list</p>
            <div class="panel">
		<svg width="5000" height="605">
<g>
  <rect x="0" y="05" rx="20" ry="20" width="400" height="604" style="fill:#1E1E1E

;stroke:black;stroke-width:5;opacity:0.8"/>
 <foreignObject x="100" y="20" width="602" height="302">
        <body xmlns="http://www.w3.org/1999/xhtml">
		<form action="" method="get" name="query1">
 <table width="300" border="0">
  <tr>
    <td height="48">min cgpa</td>
    <td>
	<select>
 <option value="1">9.5</option>
 <option value="2">9.0</option>
  <option value="3">8.5</option>
  <option value="4">8.0</option>
    <option value="5">7.5</option>
	  <option value="4">7.0</option>
	    <option value="4">6.5</option>
		  <option value="4">6.0</option>
		  <option value="5">ALL</option>
		  </select>
  </tr>
  <tr>
    <td height="47"><p>min. 10th %</p></td>
    <td><input type="number" id="10th" /></td>
  </tr>
  <tr>
    <td height="55">department</td>
    <td><select name="select">
      <option value="d1">Mtech</option>
      <option value="d2">MBA</option>
      <option value="d3">CSE</option>
      <option value="d4">ISE</option>
      <option value="d5">TCE</option>
      <option value="d6">ECE</option>
      <option value="d7">BT</option>
      <option value="d8">MECH</option>
      <option value="d9">ALL</option>
    </select></td>
  </tr>
  <tr>
    <td height="63">deploma??</td>
    <td><p>&nbsp;
        </p>
      <p>
        <input type="radio" name="yeargap" onclick="hide()" value="no">
        NO
		<input type="radio" name="yeargap" value="yes" onclick="show()">YES<br /> 
		<br />
    </p></td>
  </tr>
  </table>
  <input name="submit1" type="button" value="submit">
  </form>
        </body>
    </foreignObject>
</g>
</svg>
                
            </div>

        </div>

        <!-- popup form #1 -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <h2>Welcome!!</h2>
            <p>Please enter your login and password here</p>
           <form method="post" action="main.php">
           <div>
                <label for="login">Login</label>
                <input type="text" id="login" value="" name="login" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" value="" />
            </div>
            <input type="submit" value="Log In" name="loggin" />
            </form>

            <a class="close" href="#close"></a>
        </div>

        <!-- popup form #2 -->
        <a href="#x" class="overlay" id="join_form"></a>
        <div class="popup">
            <h2>Sign Up</h2>
            <p>Please enter your details here</p>
<form method="post" action="insert.php">
            <div>
                <label for="email">Login (usn)</label>
                <input type="text" id="usn" name="usn" value="" />
            </div>
            <div>
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" value="" />
            </div>
            <div>
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstname" value="" />
            </div>
            <div>
                <label for="lastname">Last name</label>
                <input type="text" id="lastname" name="lastname" value="" />
            </div>
            <input type="submit" value="Sign Up" />
</form>&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;<a href="#login_form" id="login_pop">Log In</a>

            <a class="close" href="#close"></a>
        </div>
        <script type="text/javascript">
        function show() { document.getElementById('reas').style.display = 'block'; }
		</script>
    </body>
</html>