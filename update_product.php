<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:updateproduct.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$id=mysql_real_escape_string(@$_REQUEST['product_id']);
$sql="SELECT * FROM `product` WHERE id=$id";
$result=  mysql_query($sql) or die(mysql_error());
$rws=  mysql_fetch_array($result);
?>
<?php

                        $delete_id=  mysql_real_escape_string($_REQUEST['product_id']);
                        if(isset($_REQUEST['submit2_id'])){
                            $sql_delete="DELETE FROM `product` WHERE `id` = '$delete_id'";
                            mysql_query($sql_delete) or die(mysql_error());
                            header('location:delete_product.php');
                        } 
                        ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="newcss.css"/>
        <title>product List</title>
    </head>
    <?php include 'header.php'; ?>
        <div class='content_purchasebook'>
                <div class='purchasebook'>
                <form action="alter_product.php" method="POST">
            <table align="center" >
                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Product List</u></h3></td></tr>
                
				 <tr>
                    <td>Product Name:</td>
                   <td>
                    <?php 
  $sql = "select * from product";
  $result3=  mysql_query($sql) or die(mysql_error());
 $rws3=  mysql_fetch_array($result3); 
?>                </tr>
               
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
