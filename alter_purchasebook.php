<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:display_ledgerbook.php');   
?>
<?php
include '_inc/dbconn.php';
$id=  mysql_real_escape_string($_REQUEST['current_id']);
$date=  mysql_real_escape_string($_REQUEST['edit_date']);
$ordernum=  mysql_real_escape_string($_REQUEST['edit_ordernum']);
$supplierbillnum=  mysql_real_escape_string($_REQUEST['edit_supplierbillnum']);
$Suppliername=  mysql_real_escape_string($_REQUEST['suppliername']);
$producttype=  mysql_real_escape_string($_REQUEST['edit_producttype']);
$Productname=  mysql_real_escape_string($_REQUEST['edit_Productname']);
$qty=  mysql_real_escape_string($_REQUEST['edit_qty']);
$rate=  mysql_real_escape_string($_REQUEST['edit_rate']);
$tax=  mysql_real_escape_string($_REQUEST['edit_tax']);
$discount=  mysql_real_escape_string($_REQUEST['edit_discount']);
$amount=  mysql_real_escape_string($_REQUEST['edit_amount']);
$remark=  mysql_real_escape_string($_REQUEST['edit_remark']);
$sql="UPDATE purchasebook SET  date='$date',ordernum ='$ordernum', supplierbillnum='$supplierbillnum', 
    Suppliername='$Suppliername',producttype='$producttype', Productname='$Productname', qty='$qty', 
        rate='$rate', tax='$tax', discount='$discount', amount='$amount', remark='$remark' WHERE id='$id'";

mysql_query($sql) or die(mysql_error());
header('location:adminhomepage.php');
echo "Done";
?>