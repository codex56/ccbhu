<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:editproduct.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <noscript><meta http-equiv="refresh" content="0;"></noscript>  
        <meta charset="UTF-8">
        <title>addproduct</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
	<?php include 'header.php';
?>
<div class='content'>
<div class="user_login">
    <form  action="add_product.php"  onsubmit="myfunction()" method='POST'>
        <table align="center">
            <tr><td><span class="caption">Add Product</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Product Name:</td></tr>
            <tr><td><input type="text" name="name" required></td></tr>
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Add Product" class="button"></td></tr>
        </table>
    </form>
	<script>
			function myfunction(){
			alert("sucessfull add product");
						}
			</script>
            </div>
			</div>
     </body>
	 </html>
	 <?php include 'footer.php';
?>