<?php 
session_start();
if(!isset($_SESSION['admin_login'])) 
    header('location:stockledgerbook.php');   
?>
<?php
include '_inc/dbconn.php';
$id=  mysql_real_escape_string($_REQUEST['current_id']);
$date=  mysql_real_escape_string($_REQUEST['edit_date']);
$ref=  mysql_real_escape_string($_REQUEST['edit_ref']);
$chalan=  mysql_real_escape_string($_REQUEST['edit_chalan']);
$producttype=  mysql_real_escape_string($_REQUEST['edit_producttype']);
$productname=  mysql_real_escape_string($_REQUEST['productname']);
$issueto=  mysql_real_escape_string($_REQUEST['edit_issueto']);
$issueby=  mysql_real_escape_string($_REQUEST['edit_issueby']);
$qyt=  mysql_real_escape_string($_REQUEST['edit_qyt']);
$issued=  mysql_real_escape_string($_REQUEST['edit_issued']);
$bln=  mysql_real_escape_string($_REQUEST['edit_bln']);
$cost=  mysql_real_escape_string($_REQUEST['edit_cost']);
$sql="UPDATE stockbook SET  date='$date',ref ='$ref', chalan='$chalan', 
    producttype='$producttype',productname='$productname', issueto='$issueto', issueby='$issueby', 
        qyt='$qyt',issued='$issued', bln='$bln', cost='$cost' WHERE id='$id'";

mysql_query($sql) or die(mysql_error());
header('location:adminhomepage.php');
echo "Done";
?>