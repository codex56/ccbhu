<?php 
session_start();
if(!isset($_SESSION['admin_login'])) 
    header('location:addsupplier.php');   
?>
<?php
include '_inc/dbconn.php';
$name=  mysql_real_escape_string($_REQUEST['name']);
$sql="insert into supplier (name)
values('$name')";
mysql_query($sql)  or die(mysql_error());
header('location:addsupplier.php');
?>