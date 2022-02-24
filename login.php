<!DOCTYPE HTML>  
<html>
<head>

<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $passErr = "";
$name = $pass="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "pass is required";
  } else {
    $pass = test_input($_POST["pass"]);
  }
    
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Login</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  User Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="password" name="pass">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  
  <input type = "checkbox">Remember Me <br>
 <p> <input type="submit" name="submit" value="Submit">  <a href="forgotpass.php">Forgot Password?</a>
</p>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $pass;

?>

</body>
</html>