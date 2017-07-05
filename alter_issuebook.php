<?php 
session_start();
if(!isset($_SESSION['admin_login'])) 
    header('location:issueledgerbook.php');   
?>
<?php
include '_inc/dbconn.php';
$id=  mysql_real_escape_string($_REQUEST['current_id']);
$date=  mysql_real_escape_string($_REQUEST['edit_date']);
$dept=  mysql_real_escape_string($_REQUEST['edit_dept']);
$serial=  mysql_real_escape_string($_REQUEST['edit_serial']);
$issueto=  mysql_real_escape_string($_REQUEST['edit_issueto']);
$desig=  mysql_real_escape_string($_REQUEST['edit_desig']);
$article=  mysql_real_escape_string($_REQUEST['edit_article']);
$issued=  mysql_real_escape_string($_REQUEST['edit_issued']);
$received=  mysql_real_escape_string($_REQUEST['edit_received']);
$remark=  mysql_real_escape_string($_REQUEST['edit_remark']);
$sql="UPDATE issuebook SET  date='$date',dept ='$dept', serial='$serial', 
 issueto='$issueto', desig='$desig', article='$article',issued='$issued', received='$received', remark='$remark' WHERE id='$id'";

mysql_query($sql) or die(mysql_error());
header('location:adminhomepage.php');
echo "Done";
?>