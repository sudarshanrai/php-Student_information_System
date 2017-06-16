<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['USNF']);
IF(!ISSET($_SESSION['name']))
{
header( 'Location: http://localhost/login.php' ) ;
}
?>