<?php 
session_start();
if(!isset($_SESSION['admin_login'])) 
    header('location:updateproduct.php');   
?>
<?php
include '_inc/dbconn.php';
$id=  mysql_real_escape_string($_REQUEST['current_id']);
$name=  mysql_real_escape_string($_REQUEST['name']);
$sql="UPDATE product SET  name='$name' WHERE id='$id'";
mysql_query($sql) or die(mysql_error());
header('location:adminhomepage.php');
echo "Done";
?>