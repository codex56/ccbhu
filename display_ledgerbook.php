<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminhomepage.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$sql="SELECT * FROM `purchasebook`";
$result=  mysql_query($sql) or die(mysql_error());
$sql_min="SELECT MIN(id) from purchasebook";
$result_min=  mysql_query($sql_min);
$rws_min=  mysql_fetch_array($result_min);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Details</title>
        <style>
		
            .display_content table,th,td {
    padding:6px;
    border: 2px solid #2E4372;
   border-collapse: collapse;
}
#button{
    border:none;
}
.delete_button 
{
	background: linear-gradient(to bottom, rgba(207,231,250,1) 0%,rgba(99,147,193,1) 98%,rgba(99,147,193,1) 100%); 
    font-size:18px;
    color:#2E4372;
    font-weight: bold;
    cursor:pointer;
	text-decoration:none;
}
        </style>
        <link rel="stylesheet" href="newcss.css">
    </head>
    
    <?php include 'header.php' ?>
     
    <div class="display_content">
                    <div class="display">
                <form action="ledgerbook.php" method="POST">
            
                    <table align="center">
                        <caption align='center' style='color:#2E4372'><h3><u>Purchase Book of Stock and Stores</u></h3></caption>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Order No.</th>
                        <th>Supplier Bill No.</th>
                        <th>Supplier Name</th>
						<th>Product Type</th>
                        <th>Description of the Articles  Suplied</th>
                        <th>No. Or Quantity</th>
                        <th>Rate</th>
                        <th>Tax And Vat</th>
                        <th>Discount</th>
			             <th>Amount</th>
						 <th>Remarks</th>
                        <?php
                        while($rws=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='purchasebook_id' value=".$rws[0];
                            if($rws[0]==$rws_min[0]) echo' checked';
                            echo " /></td>";
                            echo "<td>".$rws['date']."</td>";
                            echo "<td>".$rws['ordernum']."</td>";
                            echo "<td>".$rws['supplierbillnum']."</td>";
                            echo "<td>".$rws['suppliername']."</td>";
						    echo "<td>".$rws['producttype']."</td>";
                            echo "<td>".$rws['productname']."</td>";
                            echo "<td>".$rws['qty']."</td>";
                            echo "<td>".$rws['rate']."</td>";
			                echo "<td>".$rws['tax']."</td>";
			                echo "<td>".$rws['discount']."</td>";
                            echo "<td>".$rws['amount']."</td>";
							echo "<td>".$rws['remark']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table></br>
                    <table align="center" id='button'>
                    <tr>
                            <td><input type="submit" name="submit1_id" value="EDIT DETAILS" class='purchasebook_button' ></td>
<td> <a href="delete_purchasebook.php" class="delete_button">DELETE DETAIL</a></td>
                        </tr>
                       
                    </table>
                    </form>             
</div>
</body>
</html>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$sql="SELECT * FROM `stockbook`";
$result=  mysql_query($sql) or die(mysql_error());
$sql_min="SELECT MIN(id) from stockbook";
$result_min=  mysql_query($sql_min);
$rws_min=  mysql_fetch_array($result_min);
?>
<!DOCTYPE html>
<html>
    <head>
      
    </head>
    <div class="display_content">
                    <div class="display">
                <form action="stockledgerbook.php" method="POST">
            
                    <table align="center">
                        <caption align='center' style='color:#2E4372'><h3><u>Stock Book Details</u></h3></caption>
                        <th>ID</th>
                        <th>Date of Recipt/Issue</th>
						<th>Reference of Purchase Book</th>
                        <th>Deptt.Chalan No. in case of Issue</th>
						<th>Product Type</th>
						<th>Product Name</th>
                        <th>Issue To</th>
                        <th>Issue BY</th>
                        <th>Quantity Received</th>
						<th>Quantity Issued</th>
                        <th>Stock Balance</th>
						<th>Cost of Purchase</th>
                        <?php
                        while($rws=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='stockbook_id' value=".$rws[0];
                            if($rws[0]==$rws_min[0]) echo' checked';
                            echo " /></td>";
                            echo "<td>".$rws['date']."</td>";
                            echo "<td>".$rws['ref']."</td>";
							echo "<td>".$rws['chalan']."</td>";
							echo "<td>".$rws['producttype']."</td>";
                            echo "<td>".$rws['productname']."</td>";
                            echo "<td>".$rws['issueto']."</td>";
                            echo "<td>".$rws['issueby']."</td>";
			                echo "<td>".$rws['qyt']."</td>";
							echo "<td>".$rws['issued']."</td>";
			                echo "<td>".$rws['bln']."</td>";
							echo "<td>".$rws['cost']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table></br>
                    <table align="center" id='button'>
                        <tr>
                            <td><input type="submit" name="submit_id" value="EDIT DETAILS" class='purchasebook_button' ></td>
<td> <a href="delete_stockbook.php" class="delete_button">DELETE DETAIL</a></td>
                        </tr>
                    </table>
                    </form>              
</div>     
    </body>
</html>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$sql="SELECT * FROM `issuebook`";
$result=  mysql_query($sql) or die(mysql_error());
$sql_min="SELECT MIN(id) from issuebook";
$result_min=  mysql_query($sql_min);
$rws_min=  mysql_fetch_array($result_min);
?>
<!DOCTYPE html>
<html>
    <head>
      
    </head>
    <div class="displayissue_content">
                    <div class="display">
                <form action="issueledgerbook.php" method="POST">
            
                    <table align="center">
                        <caption align='center' style='color:#2E4372'><h3><u>Issue Slip </u></h3></caption>
                        <th>ID</th>
                        <th>Date</th>
						<th>Department</th>
                        <th>Serial No.</th>
						<th>Issue To </th>
						<th>Designation</th>
                        <th>Name of Article</th>
                        <th>Quantity Issued by Store</th>
                        <th>Quantity Received By Indentor</th>
						<th> Remark</th>
                        <?php
                        while($rws=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='issuebook_id' value=".$rws[0];
                            if($rws[0]==$rws_min[0]) echo' checked';
                            echo " /></td>";
                            echo "<td>".$rws['date']."</td>";
                            echo "<td>".$rws['dept']."</td>";
							echo "<td>".$rws['serial']."</td>";
							echo "<td>".$rws['issueto']."</td>";
                            echo "<td>".$rws['desig']."</td>";
                            echo "<td>".$rws['article']."</td>";
                            echo "<td>".$rws['issued']."</td>";
			                echo "<td>".$rws['received']."</td>";
							echo "<td>".$rws['remark']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table></br>
                    <table align="center" id='button'>
                        <tr>
                            <td><input type="submit" name="submit_id" value="EDIT DETAILS" class='purchasebook_button' ></td>
<td> <a href="delete_stockbook.php" class="delete_button">DELETE DETAIL</a></td>
                        </tr>
                    </table>
                    </form>                   
</div>
    </body>
</html>
 <?php include 'footer.php';?>