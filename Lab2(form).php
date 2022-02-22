<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<?php
	// define variables and set to empty values
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";

	$nameErr = $passErr = $confirmpassErr = "";
	$name = $pass="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	  } else {
	    $name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		  $nameErr = "Only letters and white space allowed";
		  $name = "";
		}
	  }

	  if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	  } else {
	    $email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format";
		  $email="";
		}
	  }

	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["username"])) {
		  $usernameErr = "User Name is required";
		} else {
		  $username = test_input($_POST["username"]);
		}
		
		if (empty($_POST["pass"])) {
		  $passErr = "pass is required";
		} else {
		  $pass = test_input($_POST["pass"]);
		}

		if (empty($_POST["confirmpass"])) {
			$passErr = "Confirm pass is required";
		  } else {
			$pass = test_input($_POST["confirmpass"]);
		  }
		  
	  }


	  if (empty($_POST["gender"])) {
	    $genderErr = "Gender is required";
	  } else {
	    $gender = test_input($_POST["gender"]);
	  }
	}
    if (empty($_POST["dateofbirth"])) {
	    $dateofbirthErr = "Date of Birth is required";
	  } else {
	    $dateofbirth = test_input($_POST["dateofbirth"]);
	  }
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    
		Name: 
		<input type="text" name="name" value="<?php echo $name;?>">
        
		<span class="error">* <?php echo $nameErr;?></span>
		<br>
        <hr style="width:40%;text-align:left;margin-left:0">
		E-mail:
		<input type="text" name="email" value="<?php echo $email;?>">
		<span class="error">* <?php echo $emailErr;?></span>
		
		<hr style="width:40%;text-align:left;margin-left:0">

		User Name: 
		<input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <hr style="width:40%;text-align:left;margin-left:0">
        Password: 
       <input type="password" name="pass">
       <span class="error">* <?php echo $passErr;?></span>
       <hr style="width:40%;text-align:left;margin-left:0">

	   Confirm Password: 
       <input type="confirmpassword" name="confirmpass">
       <span class="error">* <?php echo $confirmpassErr;?></span>
	   <hr style="width:40%;text-align:left;margin-left:0">

		Gender:
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="other">Other
		
        <hr style="width:40%;text-align:left;margin-left:0">
        
		Date of Birth:
		<select name = "day">
        <option>Day</option>
        <?php
	        for($day = 1; $day <= 31; $day++){
		       echo "<option value = '".$day."'>".$day."</option>";
		}
	?>
</select>
<select name = "month">
	<option>Month</option>
	<?php
		for($month = 1; $month <= 12; $month++)
		echo"<option value = '".$month."'>".$month."</option>";
	?>
</select>
<select name = "year">
	<option>Year</option>
	<?php
		$y = date("Y", strtotime("+8 HOURS"));
		for($year = 1950; $y >= $year; $y--){
			echo "<option value = '".$y."'>".$y."</option>";
		}
	?>
</select>

<hr style="width:40%;text-align:left;margin-left:0">


		<input type="submit" name="submit" value="Submit"> 
		<input type="reset" value="Reset">
	</form>
	<h2>Your input</h2>
	<?php 
			echo $name."<br>";
			echo $email."<br>";
            
			echo $pass."<br>";
			
			echo $gender."<br>";
			
	 ?>
</body>
</html>