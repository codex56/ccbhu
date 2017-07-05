<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:stockledgerbook.php');   
?>
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
                <form action="stockledgerbook.php" method="POST">
            
                    <table align="center">
                          <caption align='center' style='color:#2E4372'><h3><u>Delete Purchase Book of Stock and Stores</u></h3></caption>
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