<?php 
session_start();
if(!isset($_SESSION['admin_login'])) 
    header('location:adminhomepage.php');   
?>
   
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>stockbook</title>
        
        <link rel="stylesheet" href="newcss.css">
		<script type="text/javascript" src="_inc/jquery.min.js"></script>
		
    </head>
<?php include 'header.php'; ?>
<div class='content_purchasebook'>
            <div class='purchasebook'>
			
<form action="stock_book.php" method="POST">
<p align="right">FORM A.R.-16<br>(Para94 Of A.R.)</p>
            <table align="center">
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u> Stock Book</u></h3>
				</td></tr>
                <tr>
                    <td>
                        Date of Receipt/Issue:
                    </td>
                    <td>
                        <input type="date" name="date" required=""/>
                    </td>
                </tr>
				 <tr>
                    <td>
                        Reference of Purchase Book:
                    </td>
                    <td>
                        <input type="text" name="ref" required=""/>
                    </td>
                </tr>
				  <tr>
                    <td>
                        Deptt. Chalan No. in case of Issue:
                    </td>
                    <td>
                        <input type="number" name="chalan" required=""/>
                    </td>
                </tr>
				 <tr><td>Product Type :</td>
				<td>
				<select name="producttype">
				<option>Consumer Product</option>
                 <option>Non Consumer Product</option></td></tr>
                 <tr>
                    <td>Product Name :</td>
                    
					<?php
include '_inc/dbconn.php';
  $sql = "select * from product";
  $result=  mysql_query($sql) or die(mysql_error());
 echo '<td><select name="productname" id="productname">';
 echo '<option>--Select--</option>';
	while($rws=  mysql_fetch_array($result)){
     echo '<option>'.$rws['name'].'</option>';
	}           			
                       echo '</select></td>';
?>
                       
                    </td>
                </tr>
		<tr>
                    <td>Issue To :</td>
                    <td>
                       <input type="text" name="issueto" required=""/>
                  </td>
                </tr>
		<tr>
                    <td>Issue By :</td>
                    <td><input type="text" name="issueby" required=""/></td>
                </tr>
                
		 <tr>
                    <td>Number of Quantity :</td></tr>
					<td>Received :</td>
                    <td><input type="number" name="qyt" required=""/></td>
					<tr>
					<td>Issued :</td>
                    <td><input type="number" name="issued" required=""/></td>
                </tr>
		 <tr>
                    <td>Stock Balance :</td>
                    <td id="bln"></td>
              
                </tr>
				<tr>
                    <td>
                        Cost of Purchase:
                    </td>
                    <td>
                        <input type="number" name="cost" required=""/>
                    </td>
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
<script type="text/javascript" src="populate.js"></script>
    </body>
</html>