<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:ledgerbook.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$id=mysql_real_escape_string(@$_REQUEST['purchasebook_id']);
$sql="SELECT * FROM `purchasebook` WHERE id=$id";
$result=  mysql_query($sql) or die(mysql_error());
$rws=  mysql_fetch_array($result);
?>
<?php

                        $delete_id=  mysql_real_escape_string($_REQUEST['purchasebook_id']);
                        if(isset($_REQUEST['submit2_id'])){
                            $sql_delete="DELETE FROM `purchasebook` WHERE `id` = '$delete_id'";
                            mysql_query($sql_delete) or die(mysql_error());
                            header('location:delete_purchasebook.php');
                        } 
                        ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="newcss.css"/>
        <title>purchasebook editing</title>
    </head>
    <?php include 'header.php'; ?>
        <div class='content_purchasebook'>
                <div class='purchasebook'>
                <form action="alter_purchasebook.php" method="POST">
            <table align="center" >
                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Purchase Book of Stock and Stores</u></h3></td></tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="edit_date" value="<?php echo $rws['date'];?>" required=""/></td>
                </tr>
                <tr>
                    <td>Order No.</td>
                    <td>
                        <input type="text" name="edit_ordernum" value=" <?php echo $rws['ordernum'];?>" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Supplier's Bill No.
                    </td>
                    <td>
                        <input type="text" name="edit_supplierbillnum" value="<?php echo $rws['supplierbillnum'];?>"/>
                    </td>
                </tr>
                <tr>
               <td>
                       Supplier Name And Address:
                    </td>
<?php 
  $sql = "select * from supplier";
  $result2=  mysql_query($sql) or die(mysql_error());
 echo '<td><select name="suppliername">';
	while($rws2=  mysql_fetch_array($result2)){
     echo '<option>'.$rws2['name'].'</option>';
	}           			
                       echo '</select></td>'; 
?>
                </tr>
                <tr>
                    <td>Product Type</td>
                    <td>
                        <select name="edit_producttype">
                            <option <?php if($rws['producttype']=="Consumable Product") echo "selected";?>>Consumable Product</option>
                            <option <?php if($rws['producttype']=="Non Consumable Product") echo "selected";?>>None Consumable Product</option>
                        </select>
                    </td>
                </tr>
				 <tr>
                    <td>Description of the Articles Supplied:</td>
                   
                       
                    <?php 
  $sql = "select * from product";
  $result3=  mysql_query($sql) or die(mysql_error());
 echo '<td><select name="productname">';
	while($rws3=  mysql_fetch_array($result3)){
     echo '<option>'.$rws3['name'].'</option>';
	}           			
                       echo '</select></td>'; 
?>
                </tr>
               <tr>
                    <td>
                         Number Or Quantity:
                    </td>
                    <td>
                        <input type="number" name="edit_qty" value="<?php echo $rws['qty'];?>"/>
                    </td>
                </tr>
                
                <tr>
                    <td>Rate</td>
                    <td><input type="number" name="edit_rate" value="<?php echo $rws['rate'];?>"/></td>
                </tr>

				              
                    <td>Tax</td>
                    <td><input type="number" name="edit_tax" value="<?php echo $rws['tax'];?>" /></td>
                </tr>

                <tr>
                    <td>Discount</td>
                    <td><input type="number" name="edit_discount" value="<?php echo $rws['discount'];?>" required=""/></td>
                </tr>
		 <tr>
                    <td>Amount</td>
                    <td><input type="number" name="edit_amount" value="<?php echo $rws['amount'];?>" required=""/></td>
                </tr>
				 <tr>
                    <td>Remark</td>
                    <td><input type="Text" name="edit_remark" value="<?php echo $rws['remark'];?>" required=""/></td>
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
