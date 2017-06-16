
<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('placement')  or die(mysql_error());
//$usn1=$_post['usn'];
$query1=mysql_query("select * from  company;")  or die(mysql_error());
$query2=mysql_query("select * from  student;")  or die(mysql_error());
$n=0;
include_once'PHPMailer/PHPMailerAutoload.php';
while($res1=mysql_fetch_array($query1)) 
{
$company=$_POST['cname'];
if($res1['cname']==$company)
{
while($res2=mysql_fetch_array($query2)) 
{
if(($res2['cgpa']>=$res1['min_qualification'])&&($res2['branch']==$res1['branch']))
{
$n=$n+1;
echo $company;
$mail[$n] = new PHPMailer;
$mail[$n]->isSMTP();
$mail[$n]->Host = 'smtp.gmail.com';
$mail[$n]->SMTPAuth = true;
$mail[$n]->Username = 'sudarshanrai94@gmail.com';
$mail[$n]->Password = 'pallavialva';
$mail[$n]->SMTPSecure = 'tls';
$mail[$n]->From = 'sudarshanrai94@gmail.com';
$mail[$n]->FromName = 'suddu';
$mail[$n]->addAddress($res2['email'], $res2['fname']);
$mail[$n]->addReplyTo($res2['email'], $res2['fname']);
$mail[$n]->WordWrap = 50;
$mail[$n]->isHTML(true);
$mail[$n]->Subject = 'from placement dept.';
$mail[$n]->Body    = 'Hi you are invited to attend interview of '.$company.'on'.$res1['dop'];
if(!$mail[$n]->send()) {
  $_SESSION['mail1']="message couldnt sent successfully ";
header( 'Location: http://localhost/send_notification.php' ) ;

   exit;
   }
   }
   }
}
}
session_start();
$_SESSION['mail']="message successfully sent to ".$n." students";
header( 'Location: http://localhost/send_notification.php' ) ;
?>