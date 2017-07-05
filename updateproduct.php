<?php 
session_start();     
if(!isset($_SESSION['admin_login'])) 
    header('location:adminhomepage.php');   
?>
<!DOCTYPE html>
<?php
include '_inc/dbconn.php';
$sql="SELECT * FROM `product`";
$result=  mysql_query($sql) or die(mysql_error());
$sql_min="SELECT MIN(id) from product";
$result_min=  mysql_query($sql_min);
$rws_min=  mysql_fetch_array($result_min);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Product </title>
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
                <form action="update_product.php" method="POST">
            
                    <table align="center">
                        <caption align='center' style='color:#2E4372'><h3><u>Detail Product</u></h3></caption>
                        <th>Id</th>
                        <th>Product Name</th>
                        <?php
                        while($rws=  mysql_fetch_array($result)){
                            echo "<tr><td><input type='radio' name='product_id' value=".$rws[0];
                            if($rws[0]==$rws_min[0]) echo' checked';
                            echo " /></td>";
                            echo "<td>".$rws['name']."</td>";
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