<?php 
session_start();
if(!isset($_SESSION['admin_login'])) 
    header('location:adminhomepage.php');   
?>
   
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>issuebook</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
<?php include 'header.php'; ?>
<div class='content_purchasebook'>
            <div class='purchasebook'>
			
<form action="issue_book.php" method="POST">
            <table align="center">
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h2><u> Issue Slip</u></h2>
				</td></tr>
                <tr>
                    <td>
                        Date:
                    </td>
                    <td>
                        <input type="date" name="date" required=""/>
                    </td>
                </tr>
				 <tr>
                    <td>
                        Department:
                    </td>
   
                        <td><textarea rows="2" cols="25" name="dept"></textarea><br></td>
                    
                </tr>
				  <tr>
                    <td>
                        Serial No.:
                    </td>
                    <td>
                        <input type="text" name="serial" required=""/><br>
                    </td>
                </tr>
		<tr>
                    <td>Issue To :</td>
                    <td>
                       <input type="text" name="issueto" required=""/><br>
                  </td>
                </tr>
		<tr>
                    <td>Designation:</td>
                    <td><input type="text" name="desig" required=""/></td><br>
                </tr>
                
		 <tr>
	            <td>Name of Article :</td>
                     <td><textarea rows="2" cols="25" name="article"></textarea><br></td>
                </tr>
		 <tr>
                    <td>Quantity Issued by Store:</td>
                    <td><input type="tex" name="issued" required=""/></td><br>
              
                </tr>
		<tr>
                    <td>
                        Quantity Received By Indentor:
                    </td>
                    <td>
                        <input type="text" name="received" required=""/><br>
                    </td>
                </tr>
		<tr>
                    <td>
                        Remark:
                    </td>
                    <td>
                        <input type="text" name="remark" required=""/><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="1" style='padding-top:10px'><input type="submit" name="submit" value="Submit" class="purchasebook_button"/></td>
                    <td colspan="1"  style='padding-top:10px'><input type="reset" name="reset" value="Reset" class="purchasebook_button"/></td>
                </tr>
            </table>
            </div>
    </div>
        </form>
<?php include 'footer.php';?>
    </body>
</html>