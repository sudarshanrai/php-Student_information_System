<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>CSS3 Modal Popups | Script Tutorials</title>
        <link href="send_notifications/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="send_notification/css/modal.css" rel="stylesheet" type="text/css" />
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
    <td height="55">select company</td>
    <td><select name="select">
      <option value="sap">sap</option>
      <option value="oracle">oracle</option>
      <option value="akamai">akamai</option>
      <option value="zynga">zynga</option>
      <option value="TCS">TCS</option>
      <option value="MU sigma">mu sigma</option>
      <option value="jp morgon">jp morgon</option>
      <option value="Adobe">Adobe</option>
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
    </body>
</html>