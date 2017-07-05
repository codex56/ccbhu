<?php 
session_start();
if(!isset($_SESSION['admin_login'])) 
    header('location:issuebook.php');   
?>
<?php
include '_inc/dbconn.php';
$date=  mysql_real_escape_string($_REQUEST['date']);
$dept=  mysql_real_escape_string($_REQUEST['dept']);
$serial=  mysql_real_escape_string($_REQUEST['serial']);
$issueto=  mysql_real_escape_string($_REQUEST['issueto']);
$desig=  mysql_real_escape_string($_REQUEST['desig']);
$article=  mysql_real_escape_string($_REQUEST['article']);
$issued=  mysql_real_escape_string($_REQUEST['issued']);
$received=  mysql_real_escape_string($_REQUEST['received']);
$remark=  mysql_real_escape_string($_REQUEST['remark']);
$sql="insert into issuebook (date,dept,serial,issueto,desig,article,issued,received,
    remark)values('$date','$dept','$serial','$issueto','$desig','$article','$issued','$received',
	'$remark')";
mysql_query($sql)  or die(mysql_error());
header('location:issuebook.php');
?>