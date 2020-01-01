<?php
 include("header.php");
?>

<h2>Change Password</h2>
<section class="main">	
	<form action="passwordChange.php" method="post" class="form-1">
         <table align="center">
			<tbody><tr></tr>
			<tr>
				<td>Old Password:</td>
				<td><input required="" name="oldPassword" id="oldPassword" type="password"></td>
			</tr>
			<tr>
				<td>New Password:</td>
				<td><input onkeyup="passwordValidation()" required="" name="newPassword" id="newPassword" type="password"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input onkeyup="passwordMatchValidation()" required="" name="cnfrmPassword" id="cnfrmPassword" type="password"></td>
			</tr>
			<tr><td colspan="2" align="center"><input value="Update Password" type="submit"></td></tr>
		</tbody></table>
	</form>

</section>
