<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
        <link href="form/css/layout.css" rel="stylesheet" type="text/css" />
       <!-- <link href="form/css/modal.css" rel="stylesheet" type="text/css" />--> 
<!--	 <link href="form.css" rel="stylesheet" type="text/css" />	-->
<title> ONLINE APPLICATION FORM</title>
 <script type="text/javascript">
        function show() { document.getElementById('reas').style.display = 'block'; }
        function hide() { document.getElementById('reas').style.display = 'none'; }
		function show1() { document.getElementById('highreas').style.display = 'block'; }
       function hide1() { document.getElementById('highreas').style.display = 'none'; }
		function show2() { document.getElementById('prefreas').style.display = 'block'; }
        function hide2() { document.getElementById('prefreas').style.display = 'none';  }
</script>
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
<p align="right"><b>* </b>indicates compulsory fields</p> 
<form class="contact_form" action="insert3.php" autocomplete="on" method="post" onsubmit="return confirm('Are you sure you want to submit?')">

<fieldset>
		<legend align="center" style="width="18px"><b>GENERAL DETAILS</b></legend>
<table>
<tr>
<!--<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>	-->	
<td>FirstName<sup><b>*</b></sup>:</td>	
	<td>	<input type="text" name="fname" placeholder="firstname" autocomplete="on" required></td>
	<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
<td>&nbsp;&nbsp;&nbsp;</td>	
<td>LastName<sup><b>*</b></sup>: </td>
<td><input type="text" name="lname" autocomplete="on" placeholder="lastname" required><br></td>
</tr>
<tr>
<tr><td><br></td></tr>
<td>Date Of Birth:<sup><b>*</b></sup></td>
<td><input type="date" name="dob"><br></td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>Sex:</td>
			<td>
			<input type="radio" name="sex" value="male">Male
			<input type="radio" name="sex" value="female">Female <br />
			</td>
	</tr>
<tr><td><br></td></tr>
<tr>
<td>Father's name:<sup><b>*</b></sup></td>
<td><input type="text" name="fathername" required><br></td>
</tr>
<tr>
<td>Occupation:</td>
<td>	<input type="text" name="foccu"><br></td>
</tr>
<tr>
<td>Office address:</td>
<td>		<textarea name="faddr" cols="20" rows="3" ></textarea><br></td>
</tr>
<tr>
<tr><td><br></td></tr>
<td>Mother's name:<sup><b>*</b></sup></td>
<td>		<input type="text" name="mothername" required><br></td>
</tr>
<tr>
<td>Occupation:</td>
<td>		<input type="text" name="moccu"><br></td>
</tr>
<tr>
<td>Office address:</td>
<td>		<textarea name="maddr" cols="20" rows="3" ></textarea></td>
</tr>
</table>
</fieldset>
<br><br>
<fieldset>
		<legend align="center" style="width="18px"><b>EDUCATIONAL DETAILS</b></legend>
<table>
<tr>
<td>E-mail<sup><b>*</b></sup>:</td>
<td> <input type="email" name="email" placeholder="example@abc.com" required><br></td>
</tr>
<tr>
 <td>USN:<sup><b>*</b></sup></td>
<td><input type="text" name="usn" required pattern="1ms[a-zA-Z0-9]+" title="follow this way 1ms11cs000"><br></td>
&nbsp;&nbsp;&nbsp;
<td>Sem:<sup><b>*</b></sup></td>
<td><input list="semno" name="sem" size="3" required>
  <datalist  id="semno" >
    <option value="1st">
    <option value="2nd">
	<option value="3rd">
    <option value="4th"> 
	<option value="5th">
    <option value="6th">
	<option value="7th">
    <option value="8th">
  </datalist>
  </td>

</tr>
<tr>
<td>Branch<sup><b>*</b></sup>:</td>
	<td><input list="branchs" name="branch" required>
  <datalist  id="branchs" >
    <option value="Mtech">
    <option value="MBA">
    <option value="CSE">
    <option value="ECE">
	<option value="TCE">
    <option value="ISE">
	<option value="BT">
    <option value="MECH">
  </datalist>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 &nbsp;&nbsp;&nbsp;
<td>year of passing:</td>
<td><input type="text" name="year" size="3" value=""></td>
</tr>
</table>
<br>
<h3>Enter pre-degree details:</h3>
<table border="1" style=" border:1px solid #D6D6D6">
<tr>
<th>course</th>
<th>board</th>
<th>institution studied</th>
<th>%marks</th>
<th>month/year of passing</th>
<th>no of attempts</th>
</tr>
<tr>
<td>TENTH</td>
<td align="center">&nbsp;<input type="text" name="tboard" size="3"></td>
<td align="center">&nbsp;<input type="text" name="tinst" size="3"></td>
<td align="center">&nbsp;<input type="text" name="tperc" size="3"></td>
<td align="center">&nbsp;<input type="text" name="tpass" size="3"></td>
<td align="center">&nbsp;<input type="text" name="tnoa" size="3"></td>
</tr>
<tr>
<td align="center">12th</td>
<td align="center">&nbsp;<input type="text" name="ttboard" size="3"></td>
<td align="center">&nbsp;<input type="text" name="ttinst" size="3"></td>
<td align="center">&nbsp;<input type="text" name="ttperc" size="3"></td>
<td align="center">&nbsp;<input type="text" name="ttpass" size="3"></td>
<td align="center">&nbsp;<input type="text" name="ttnoa" size="3"></td>
</tr>
<tr>
<td align="center">DIPLOMA</td>
<td align="center">&nbsp;<input type="text" name="dboard" size="3"></td>
<td align="center">&nbsp;<input type="text" name="dinst" size="3"></td>
<td align="center">&nbsp;<input type="text" name="dperc" size="3"></td>
<td align="center">&nbsp;<input type="text" name="dpass" size="3"></td>
<td align="center">&nbsp;<input type="text" name="dnoa" size="3"></td>
</tr>
</table><br>
<h3>Enter semister wise SGPA:</h3>
<table border="0">
<tr>
<th>sem</th>
<th>&nbsp;sgpa</th>
<th>&nbsp;&nbsp;year of passing</th>
</tr>
<tr>
<td>1<sup>st</sup> sem</td>
<td>&nbsp;<input type="text" name="sem1" size="3"></td>
<td align="center"><input type="text" name="yr1" size="4"</td></tr>
<tr>
<td>2<sup>nd</sup> sem</td>
<td>&nbsp;<input type="text" name="sem2" size="3"></td>
<td align="center"><input type="text" name="yr2" size="4"</td></tr>
<tr>
<td>3<sup>rd</sup> sem</td>
<td>&nbsp;<input type="text" name="sem3" size="3"></td>
<td align="center"><input type="text" name="yr3" size="4"</td></tr>
<tr>
<td>4<sup>th</sup> sem</td>
<td>&nbsp;<input type="text" name="sem4" size="3"></td>
<td align="center"><input type="text" name="yr4" size="4"</td>
</tr>
<td>5<sup>th</sup> sem</td>
<td>&nbsp;<input type="text" name="sem5" size="3"></td>
<td align="center"><input type="text" name="yr5" size="4"</td></tr>
<tr>
<td>6<sup>th</sup> sem</td>
<td>&nbsp;<input type="text" name="sem6" size="3"></td>
<td align="center"><input type="text" name="yr6" size="4"</td></tr>
<tr>
<td>7<sup>th</sup> sem</td>
<td>&nbsp;<input type="text" name="sem7" size="3"></td>
<td align="center"><input type="text" name="yr7" size="4"</td></tr>
<tr>
<td>8<sup>th</sup> sem</td>
<td>&nbsp;<input type="text" name="sem8" size="3"></td>
<td align="center"><input type="text" name="yr8" size="4"</td></tr>

</table>
<table>
<tr>
<tr><td><br></td></tr>
<td>CGPA upto:<input list="semno" name="semno" size="1" required>
  <datalist  id="semno" >
    <option value="1st">
    <option value="2nd">
	<option value="3rd">
    <option value="4th"> 
	<option value="5th">
    <option value="6th">
	<option value="7th">
    <option value="8th">
  </datalist> semester: </td>
<td><input type="text" name="cgpa" size="3" required><br></td>
</tr>
<tr>
<tr><td><br></td></tr>
<td>Any year gap in education:</td>
<td>	
		<input type="radio" name="yeargap" onclick="hide()" value="yes">NO
		<input type="radio" name="yeargap" value="no" onclick="show()">if YES,when and why? &nbsp;&nbsp; <br />
</td>
<td>
		<input type="text" style="display:none;" name="reason" id="reas">
</td>
</tr>
<tr>
<td>Any plans for higher education:</td>
<td>	
		<input type="radio" name="highedu" onclick="hide1()" value="yes">NO
		<input type="radio" name="highedu" value="no" onclick="show1()">if YES,when and wat course? &nbsp;&nbsp; <br />
</td>
<td>
		<input type="text" style="display:none;" name="highreas" id="highreas">
</td>
</tr>
<tr>
<td>Any location preference for job:</td>
<td>	
			<input type="radio" name="jobpref" onclick="hide2()" value="yes">NO
			<input type="radio" name="jobpref" value="no" onclick="show2()">if YES,why? &nbsp;&nbsp; <br />
</td>
<td>
		<input type="text" style="display:none;" name="prefreas" id="prefreas">
</td>

</tr>
</table>
<br>
<p>COMPUTER KNOWLEDGE/PROJECTS/ANY OTHER CO-CURRICULAR ACTIVITIES:</p>
<br>
<table>
<tr>
<td><textarea name="extrainfo" cols="60" rows="6" placeholder="enter details here" ></textarea><br></td>
</tr>
</table>
</fieldset>
<br><br>
<fieldset>
		<legend align="center" style="width="18px"><b>OTHER DETAILS</b></legend>
<table>
<tr>
<!--<td>&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td>	-->	
<td>category:</td>	
	<td>	<input list="cat" name="category" size="3" required>
  <datalist  id="cat" >
    <option value="SC">
    <option value="ST">
    <option value="OBC">
    <option value="GM">
  </datalist>
<td>&nbsp;&nbsp;&nbsp;</td>	
<td>Physically handicapped: </td>
<td><input type="radio" name="handicapped"  value="yes">NO
	<input type="radio" name="handicapped" value="no" >YES&nbsp;&nbsp; <br />
</td>
</tr>
<tr>
<td>Height:</td>
<td><input type="number" name="height" min="100" max="300" size="1">in cm<br></td>
</tr>
<tr>
<td>Weight:</td>
<td><input type="number" name="weight" min="30" max="150" size="3">in kg<br></td>
</tr>
<tr>
<td>Eye sight:</td>
<td>left:<input type="text" name="lefteye" size="3"><br></td>
<td>right:<input type="text" name="righteye" size="3"><br></td>
</tr>
<tr>
<td>Blood Group:</td>	
	<td>	<input list="blood" name="blood_group" size="3" required>
  <datalist  id="blood" >
    <option value="A+">
	<option value="A-">
    <option value="B+">
    <option value="B-">
    <option value="AB+">
	<option value="AB-">
    <option value="O+">
	<option value="O-">
  </datalist>
</td>
</tr>
</table>
<table>
<tr><td>Address for communication:<sup><b>*</b></sup></td></tr>
<tr>
<td><textarea name="commaddr" cols="30" rows="2" placeholder="enter details here" required></textarea><br></td>
</tr>
</table>
<table>
<tr>
<td>Telephone no:</td>
<td><input type="tel" name="usrtel"></td>
</tr>
<tr><td><br></td></tr>
</table>
</fieldset>
<br><br>
<p><input type="checkbox" name="declare" required><b>I declare that the information given above is true to the best of my knowledge</b></p> 
<br><br>&nbsp;&nbsp;<input type="submit" value="save and submit form" />&nbsp;&nbsp;&nbsp;
<input type="reset" value="clear form" />
</form>
</body>
</html>
