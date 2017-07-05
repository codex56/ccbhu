<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminhomepage.php');   
?>
   
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Purchasebook</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
<?php include 'header.php'; ?>
<div class='content_purchasebook'>
            <div class='purchasebook'>

<form action="purchase_book.php" method="POST">
            <table align="center">
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Purchase Book</u></h3></td></tr>
                <tr>
                    <td>
                        Date:
                    </td>
                    <td>
                        <input type="date" name="date" required=""/>
                    </td>
                </tr>
				     <tr>
                    <td>Order No.:</td>
                    <td><input type="number" name="ordernum" required=""/></td>
                </tr>
                <tr>
                    <td>Supplier Bill No.:</td>
                    <td><input type="number" name="supplierbillnum" required=""/></td>
                </tr>
                <tr>
                    <td>
                       Supplier Name And Address:
                    </td>
<?php 
  include '_inc/dbconn.php';
  $sql = "select * from supplier";
  $result=  mysql_query($sql) or die(mysql_error());
  
 echo '<td><select name="suppliername">';
	while($rws=  mysql_fetch_array($result)){
     echo '<option>'.$rws['name'].'</option>';
	}           			
                       echo '</select></td>';
?>
                </tr>
				<tr><td>Product Type :</td>
				<td>
				<select name="producttype">
				<option>----Select----</option>
				<option>Consumable Product</option>
                 <option>Non Consumable Product</option></td></tr>
                <tr>
                    <td>Description of the Articles Supplied:</td>
                    
					<?php
include '_inc/dbconn.php';
  $sql = "select * from product";
  $result=  mysql_query($sql) or die(mysql_error());
 echo '<td><select name="productname">';
	while($rws=  mysql_fetch_array($result)){
     echo '<option>'.$rws['name'].'</option>';
	}           			
                       echo '</select></td>';
?>
                       
                    </td>
                </tr>
				  <tr>
                    <td>Number Or Quantity:</td>
                    <td><input type="number" name="qty" required=""/></td>
                </tr>
                <tr>
				<td>Rate Rs.:</td>
                    <td><input type="number" name="rate" required=""/></td>
                </tr>
                <tr>
				<td>Tax&VAT(%):</td>
                    <td><input type="number" name="tax" required=""/></td>
                </tr>
				<tr>
				<td>Discount(%):</td>
                    <td><input type="number" name="discount" required=""/></td>
                </tr>
                <tr>
                    <td> Total Amount:</td>
                    <td><input type="text" name="amount" required=""/></td>
                </tr>
<tr>
<td>Remarks:</td>
<td><textarea rows="2" cols="30" name="remark"></textarea><br></td>
</tr>
              
                <tr>
                    <td colspan="1" style='padding-top:7px'><input type="submit" name="submit" value="Submit" class="purchasebook_button"/></td>
                    <td colspan="1"  style='padding-top:7px'><input type="reset" name="reset" value="Reset" class="purchasebook_button"/></td>
                </tr>
            </table>
            </div>
    </div>
        </form>
<?php include 'footer.php';?>
    </body>
</html>
