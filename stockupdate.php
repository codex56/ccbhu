<?php
$pname = $_POST['productname'];
@include '_inc/dbconn.php';
$sql = "select * from purchasebook where productname='$pname'";
$result=  mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($result);
echo $row['qty'];

?>