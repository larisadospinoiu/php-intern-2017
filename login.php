<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'C:\xampp\htdocs\lib\header.php'; ?>



<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    
    
	<div class="container">
		<form name="Form_login" action="login.php" method="post" id="login_form" onsubmit="return validate();">
			<h1 class="login_heading">Login</h1>

			<fieldset>
				<legend id="subtitle">Please fill in your details</legend>
				<label for="login_email">Username / Email:</label>
				<input type="email" id="login_email" name="email" required placeholder="Enter Email">

				<label for="login_password">Password:</label>
				<input type="password" id="login_pass" name="pass" required placeholder="Enter Password">
			</fieldset>
			<div class="" id="passwordValidation"></div>
			<button type="submit">Login</button>
		</form>
	</div><!-- container -->

</div>
<!-- footer -->
<?php include 'C:\xampp\htdocs\lib\footer.php'; ?>
</body>
</html>
