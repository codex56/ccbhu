<?php 
session_start();
        
if(isset($_SESSION['admin_login'])) 
    header('location:adminhomepage.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>  
        <meta charset="UTF-8">
        <title>Admin Login - Inventory Managment</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
<div class="header">
             <img src="inventory.jpg" height="100px" width="100%">
            </div>
<div class='content'>
<div class="user_login">
    <form action='' method='POST'>
        <table align="center">
            <tr><td><span class="caption">Admin Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="uname" required></td></tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
    </form>
            </div>
        </div>
          <?php 
include '_inc/dbconn.php';
if(!isset($_SESSION['admin_login'])){
if(isset($_REQUEST['submitBtn'])){
    $sql="SELECT * FROM admin WHERE id='1'";
    $result=mysql_query($sql);
    $rws=  mysql_fetch_array($result);
    $username=  mysql_real_escape_string($_REQUEST['uname']);
    $password=  mysql_real_escape_string($_REQUEST['pwd']);
    if($username==$rws['login_id'] && $password==$rws['pwd']) {
		        
        $_SESSION['admin_login']=1;
    header('location:adminhomepage.php'); }
    else
        header('location:index.php');      
}
}
else {
    header('location:adminhompage.php');
}
?>
 <div  class="footer">
  <div class="footer_content">
   <li style="padding-left:950px;">Copyright@bhu.com 2017</li>
                   
                   </div>
                   </ul>          
 </div>
 </body>
 </html>