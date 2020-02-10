<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>LabTask-3</title>
</head>
<body>
	<?php
		$name=$email=$date=$exam=$gender=$bloodGroup=$month=$year="";
		$nameErr = $emailErr = $dateErr=$examErr= $genderErr=$bgErr= $monthErr = $yearErr = "";
	?>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])){
				$nameErr = "Name is required";
			} 
			else {
				$name = $_POST["name"];
			}
			if (empty($_POST["email"])){
				$emailErr = "Email is required";
			} 
			else {
				$email = $_POST["email"];
			}
			if (empty($_POST["dd"])){
				$dateErr = "Date is required";
			} 
			else {
				$date = $_POST["dd"];
			}
			if (empty($_POST["mm"])){
				$monthErr = "Month is required";
			} 
			else {
				$month = $_POST["mm"];
			}
			if (empty($_POST["yyyy"])){
				$yearErr = "Year is required";
			} 
			else {
				$year = $_POST["yyyy"];
			}
			if (empty($_POST["gender"])){
				$genderErr = "Gender is required";
			} 
			else {
				$gender = $_POST["gender"];
			}
			if (empty($_POST["bloodGroup"])){
				$bgErr = "BloodGroup is required";
			} 
			else {
				$bloodGroup = $_POST["bloodGroup"];
			}
			
			
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>Name :</b>
		<input type="text" name="name"/>
		<span style="color:red;">* <?php echo $nameErr;?></span>
		<br /><br />
		
		<b>Email :</b>
		<input type="email" name="email"/>
		<span style="color:red;">* <?php echo $emailErr;?></span>
		<br /><br />
		
		<b>Date of Birth :</b>
		<input type="number" name="dd"/>
		<span style="color:red;">* <?php echo $dateErr;?></span>
		<b>/</b>
		<input type="number" name="mm"/>
		<span style="color:red;">* <?php echo $monthErr;?></span>
		<b>/</b>
		<input type="number" name="yyyy"/>
		<span style="color:red;">* <?php echo $yearErr;?></span>
		
		<br /><br />
		<b>Gender :</b>
		<input type="radio" value="Male" name="gender"/>
		Male
		<input type="radio" value="Female" name="gender"/>
		Female
		<input type="radio" value="Other" name="gender"/>
		Other<span style="color:red;">* <?php echo $genderErr;?></span>
		<br /><br />
		
		<input type="checkbox" name="ssc" value="SSC"/>SSC
		<input type="checkbox" name="hsc" value="HSC"/>HSC
		<input type="checkbox" name="bsc" value="BSC"/>BSC
		<input type="checkbox" name="msc" value="MSC"/>MSC
		<span style="color:red;">* <?php echo $examErr;?></span>
		<br /><br />
		<b>Blood Group :</b>
		<select name="bloodGroup">
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
		</select>
		<span style="color:red;">* <?php echo $bgErr;?></span>
		<br /><br />
		
		<input type="submit" value="Submit"></input>
	</form>
	<br><br>
	<h3>Name :<?php echo $name;?></h3>
	<h3>Email :<?php echo $email;?></h3>
	<h3>Date of Birth :<?php echo $date."/".$month."/".$year;?></h3>
	<h3>Gender :<?php echo $gender;?></h3>
	
	<h3>Blood group :<?php echo $bloodGroup;?></h3>
	
</body>
</html>