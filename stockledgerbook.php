<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:stockledgerbook.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$id=mysql_real_escape_string(@$_REQUEST['stockbook_id']);
$sql="SELECT * FROM `stockbook` WHERE id=$id";
$result=  mysql_query($sql) or die(mysql_error());
$rws=  mysql_fetch_array($result);
?>
<?php

                        $delete_id=  mysql_real_escape_string($_REQUEST['stockbook_id']);
                        if(isset($_REQUEST['submit2_id'])){
                            $sql_delete="DELETE FROM `stockbook` WHERE `id` = '$delete_id'";
                            mysql_query($sql_delete) or die(mysql_error());
                            header('location:delete_stockbook.php');
                        } 
                        ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="newcss.css"/>
        <title>stockbook editing</title>
    </head>
    <?php include 'header.php'; ?>
        <div class='content_purchasebook'>
                <div class='purchasebook'>
                <form action="alter_stockbook.php" method="POST">
            <table align="center" >
                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Stock Book of Stores</u></h3></td></tr>
                <tr>
                    <td>Date of Receipt/Issue</td>
                    <td><input type="date" name="edit_date" value="<?php echo $rws['date'];?>" required=""/></td>
                </tr>
                <tr>
                    <td> Reference of Purchase Book</td>
                    <td>
                        <input type="text" name="edit_ref" value="<?php echo $rws['ref'];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Deptt. Chalan No. in case of Issue
                    </td>
                    <td>
                        <input type="text" name="edit_chalan" value="<?php echo $rws['chalan'];?>"/>
                    </td>
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
                    <td>Product Name</td>
				<?php
  $sql = "select * from product";
  $result3=  mysql_query($sql) or die(mysql_error());
 echo '<td><select name="productname">';
	while($rws3=  mysql_fetch_array($result3)){
     echo '<option>'.$rws3['name'].'</option>';
	}           			
                       echo '</select></td>';
?>
                       
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
                    <td>Issue By</td>
                    <td><input type="text" name="edit_issueby" value="<?php echo $rws['issueby'];?>"/></td>
                </tr>

				              
                    <td>Quantity Received</td>
                    <td><input type="number" name="edit_qyt" value="<?php echo $rws['qyt'];?>" /></td>
                </tr>

                <tr>
                    <td>Quantity Issued</td>
                    <td><input type="number" name="edit_issued" value="<?php echo $rws['issued'];?>" required=""/></td>
                </tr>
		 <tr>
                    <td>Stock Balance</td>
                    <td><input type="number" name="edit_bln" value="<?php echo $rws['bln'];?>" required=""/></td>
                </tr>
				 <tr>
                    <td>Cost of Purchase</td>
                    <td><input type="number" name="edit_cost" value="<?php echo $rws['cost'];?>" required=""/></td>
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
