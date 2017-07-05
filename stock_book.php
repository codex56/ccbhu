<?php 
session_start();
if(!isset($_SESSION['admin_login'])) 
    header('location:stockbook.php');   
?>
<?php
include '_inc/dbconn.php';
$date=  mysql_real_escape_string($_REQUEST['date']);
$ref=  mysql_real_escape_string($_REQUEST['ref']);
$productname=  mysql_real_escape_string($_REQUEST['productname']);
$issueto=  mysql_real_escape_string($_REQUEST['issueto']);
$issueby=  mysql_real_escape_string($_REQUEST['issueby']);
$qyt=  mysql_real_escape_string($_REQUEST['qyt']);
$bln=  mysql_real_escape_string($_REQUEST['bln']);
$producttype=  mysql_real_escape_string($_REQUEST['producttype']);
$chalan=  mysql_real_escape_string($_REQUEST['chalan']);
$cost= mysql_real_escape_string($_REQUEST['cost']);
$issued= mysql_real_escape_string($_REQUEST['issued']);
$sql="insert into stockbook (date,ref,productname,issueto,issueby,qyt,bln,producttype,
    chalan,cost,issued)values('$date','$ref','$productname','$issueto','$issueby','$qyt','$bln',
	'$producttype','$chalan','$cost','$issued')";
mysql_query($sql)  or die(mysql_error());
header('location:stockbook.php');
?>