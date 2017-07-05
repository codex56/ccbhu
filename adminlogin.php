<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>    
        
        
        <meta charset="UTF-8">
        <title>Adminhomepage</title>
		 <link rel="stylesheet" href="newcss.css">
		 <style>
		 h3{
font-family:"facifico",cursive;
text-align:center;
}
			#login_type
			{
				position:relative;
				float:left;
				width:100%;
				border:2px solid blue;
			}
			#login_type a
			{
				text-decoration:none;
			}
			#login_type .loginblk
			{
				position:relative;
				float:left;
				height:300px;
				width:20%;
				margin:1.5%;
				border:1px solid blue;
				
			}
			#login_type .loginblk img
			{
				height:250px;
				width:270px;
			}
		 </style>
    </head>
    <body>
	<?php include 'header.php' ?>
	<div id="login_type">
		<a href="purchasebook.php"><span class="loginblk"><img src="login.jpg"><h3>Purchase Book</h3></span></a>
		<a href="stockbook.php"><span class="loginblk"><img src="login.jpg"><h3>Stock Book</h3></span></a>
		<a href="issuebook.php"><span class="loginblk"><img src="login.jpg"><h3>Issue Book</h3></span></a>
	        <a href="ledgerbook.php"><span class="loginblk"><img src="login.jpg"><h3>Ledger Book</h3></span></a>
	</div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
