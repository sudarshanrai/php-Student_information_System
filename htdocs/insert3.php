<?php
 //connecting to the database
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'placement');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$sql="INSERT INTO student ( fname,lname,dob,sex,fathername, foccu, faddr, mothername, moccu, maddr, email, usn, sem, branch, yearofpassing, teboard, teinst, teperc, teyop, tenoa, twboard, twinst, twperc, twyop, twnoa, dboard, dinst, dperc, dyop, dnoa, sem1, yr1, sem2, yr2, sem3, yr3, sem4, yr4, sem5, yr5, sem6, yr6, sem7, yr7, sem8, yr8, semno, cgpa, yeargap, reason, highedu, highreas, jobpref, prefreas, extrainfo, category, handicapped, height, weight, lefteye, righteye, blood_group, commuaddr, tel )
VALUES (
'$_POST[fname]',
'$_POST[lname]',
'$_POST[dob]',
'$_POST[sex]',
'$_POST[fathername]',
'$_POST[foccu]',
'$_POST[faddr]',
'$_POST[mothername]',
'$_POST[moccu]',
'$_POST[maddr]',
'$_POST[email]',
'$_POST[usn]',
'$_POST[sem]',
'$_POST[branch]',
'$_POST[year]',
'$_POST[tboard]',
'$_POST[tinst]',
'$_POST[tperc]',
'$_POST[tpass]',
'$_POST[tnoa]',
'$_POST[ttboard]',
'$_POST[ttinst]',
'$_POST[ttperc]',
'$_POST[ttpass]',
'$_POST[ttnoa]',
'$_POST[dboard]',
'$_POST[dinst]',
'$_POST[dperc]',
'$_POST[dpass]',
'$_POST[dnoa]',
'$_POST[sem1]',
'$_POST[yr1]',
'$_POST[sem2]',
'$_POST[yr2]',
'$_POST[sem3]',
'$_POST[yr3]',
'$_POST[sem4]',
'$_POST[yr4]',
'$_POST[sem5]',
'$_POST[yr5]',
'$_POST[sem6]',
'$_POST[yr6]',
'$_POST[sem7]',
'$_POST[yr7]',
'$_POST[sem8]',
'$_POST[yr8]',
'$_POST[semno]',
'$_POST[cgpa]',
'$_POST[yeargap]',
'$_POST[reason]',
'$_POST[highedu]',
'$_POST[highreas]',
'$_POST[jobpref]',
'$_POST[prefreas]',
'$_POST[extrainfo]',
'$_POST[category]',
'$_POST[handicapped]',
'$_POST[height]',
'$_POST[weight]',
'$_POST[lefteye]',
'$_POST[righteye]',
'$_POST[blood_group]',
'$_POST[commaddr]',
'$_POST[usrtel]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Your Information Was Successfully Posted";
mysql_close($con);
?>