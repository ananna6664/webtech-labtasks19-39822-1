<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>
 <a href="changepass.php">CHANGE PASSWORD</a>;
<a href="profilepic.php">PROFILE PICTURE</a>;
</head>
<body>
<h3 align="center">CHANGE PASSWORD</h3>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Retype New Password:<br>
<input type="password" name="retype"><span id="retype" class="required"></span>
<br><br>
<input type="submit">
</form>
<br>
<br>
</body>
</html>