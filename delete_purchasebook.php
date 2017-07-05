<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:ledgerbook.php');   
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
        <title>Delete Record</title>
        <style>
            .display_content table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
}
#button{
    border:none;
}
        </style>
        <link rel="stylesheet" href="newcss.css">
    </head>
    
    <?php include 'header.php' ?>
     
    <div class="display_content">
 
                    <div class="display">
                <form action="ledgerbook.php" method="POST">
            
                    <table align="center">
                          <caption align='center' style='color:#2E4372'><h3><u>Delete Purchase Book of Stock and Stores</u></h3></caption>
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
                    </table>
                    <table align="center" id='button'>
                    
                        <tr>
                            <td><input type="submit" name="submit2_id" value="DELETE  DETAILS" class='purchasebook_button' ></td>
							
                        </tr>
                        
                    </table>
                    </form>
                        
                
                    
</div>

          <?php include 'footer.php';?>
    </body>
</html>