<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:issueledgerbook.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$id=mysql_real_escape_string(@$_REQUEST['issuebook_id']);
$sql="SELECT * FROM `issuebook` WHERE id=$id";
$result=  mysql_query($sql) or die(mysql_error());
$rws=  mysql_fetch_array($result);
?>
<?php

                        $delete_id=  mysql_real_escape_string($_REQUEST['issuebook_id']);
                        if(isset($_REQUEST['submit2_id'])){
                            $sql_delete="DELETE FROM `issuebook` WHERE `id` = '$delete_id'";
                            mysql_query($sql_delete) or die(mysql_error());
                            header('location:delete_issuebook.php');
                        } 
                        ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="newcss.css"/>
        <title>issuebook editing</title>
    </head>
    <?php include 'header.php'; ?>
        <div class='content_purchasebook'>
                <div class='purchasebook'>
                <form action="alter_issuebook.php" method="POST">
            <table align="center" >
                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Issue Slip</u></h3></td></tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="edit_date" value="<?php echo $rws['date'];?>" required=""/></td>
                </tr>
                <tr>
                    <td>  Department</td>
                    <td>
                        <input type="text" name="edit_dept" value="<?php echo $rws['dept'];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Serial No.
                    </td>
                    <td>
                        <input type="text" name="edit_serial" value="<?php echo $rws['serial'];?>"/>
                    </td>
                </tr>
		<tr>
                    <td>
                         Issue To
                    </td>
                    <td>
                        <input type="text" name="edit_issueto" value="<?php echo $rws['issueto'];?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Designation</td>
                    <td><input type="text" name="edit_desig" value="<?php echo $rws['desig'];?>"/></td>
                </tr>

				              
                    <td>Name of Article</td>
                    <td><input type="text" name="edit_article" value="<?php echo $rws['article'];?>" /></td>
                </tr>

                <tr>
                    <td>Quantity Issued by Store</td>
                    <td><input type="number" name="edit_issued" value="<?php echo $rws['issued'];?>" required=""/></td>
                </tr>
				<tr>
                    <td>Quantity Received By Indentor</td>
                    <td><input type="text" name="edit_received" value="<?php echo $rws['received'];?>" required=""/></td>
                </tr>
		<tr>
                    <td>remark</td>
                    <td><input type="textarea" name="edit_remark" value="<?php echo $rws['remark'];?>" required=""/></td>
                </tr>
                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="submit" value="UPDATE DATA" class='purchasebook_button'/></td>
                </tr>
            </table>
        </form>  
                </div>
                </div>
    </body>
</html>
  <?php include 'footer.php';?>
