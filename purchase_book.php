<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:purchasebook.php');   
?>
<?php
include '_inc/dbconn.php';
$date=  mysql_real_escape_string($_REQUEST['date']);
$ordernum=  mysql_real_escape_string($_REQUEST['ordernum']);
$supplierbillnum=  mysql_real_escape_string($_REQUEST['supplierbillnum']);
$suppliername=  mysql_real_escape_string($_REQUEST['suppliername']);
$producttype=  mysql_real_escape_string($_REQUEST['producttype']);
$productname=  mysql_real_escape_string($_REQUEST['productname']);
$qty=  mysql_real_escape_string($_REQUEST['qty']);
$rate=  mysql_real_escape_string($_REQUEST['rate']);
$tax=  mysql_real_escape_string($_REQUEST['tax']);
$discount= mysql_real_escape_string($_REQUEST['discount']);
$amount=  mysql_real_escape_string($_REQUEST['amount']);
$remark=  mysql_real_escape_string($_REQUEST['remark']);
$sql="insert into purchasebook (date,ordernum,supplierbillnum,suppliername,productname,qty,rate,
    tax,discount,amount,producttype,remark)values('$date','$ordernum','$supplierbillnum','$suppliername','$productname','$qty','$rate','$tax','$discount','$amount','$producttype','$remark')";
mysql_query($sql)  or die(mysql_error());
header('location:purchasebook.php');
?>