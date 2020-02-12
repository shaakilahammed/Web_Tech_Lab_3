<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>LabTask-3</title>
</head>
<body>
	<?php
		$name=$email=$date=$exam=$gender=$bloodGroup="";
		$nameErr = $emailErr = $dateErr=$examErr= $genderErr=$bgErr= $monthErr = $yearErr = "";
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
			
			if (empty($_POST["date"])){
				$dateErr = "Date is required";
			} 
			else {
				$date = $_POST["date"];
			}
			
			
			if (empty($_POST["gender"])){
				$genderErr = "Gender is required";
			} 
			else {
				$gender = $_POST["gender"];
			}
			if (($_POST["bloodGroup"])=="none"){
				$bgErr = "BloodGroup is required";
			} 
			else {
				$bloodGroup = $_POST["bloodGroup"];
			}
			
			if (empty($_POST["ssc"]) || empty($_POST["hsc"])){
				$examErr = "SSC and HSC are requird";
			} 
			else {
				
				$exam = $_POST["ssc"].",".$_POST["hsc"];
				
				if(!empty($_POST["bsc"]))
					$exam =$exam.", ".$_POST["bsc"];
				if(!empty($_POST["msc"]))
					$exam =$exam.", ".$_POST["msc"];
			}
			
			
		}
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td><b>Name :</b></td>
				<td><input type="text" name="name"/></td>
				<td><span style="color:red;">* <?php echo $nameErr;?></span></td>
			</tr>
			<tr>
				<td><b>Email :</b></td>
				<td><input type="email" name="email"/></td>
				<td><span style="color:red;">* <?php echo $emailErr;?></span></td>
			</tr>
			<tr>
				<td><b>Date of Birth :</b></td>
				<td><input type="Date" name="date"/></td>
				<td><span style="color:red;">* <?php echo $dateErr;?></span></td>
			</tr>
			<tr>
				<td><b>Gender :</b></td>
				<td>
					<input type="radio" value="Male" name="gender"/>Male
					<input type="radio" value="Female" name="gender"/>Female
					<input type="radio" value="Other" name="gender"/>Others</td>
				<td><span style="color:red;">* <?php echo $genderErr;?></span></td>
			</tr>
			<tr>
				<td><b>Degree :</b></td>
				<td>
					<input type="checkbox" name="ssc" value="SSC"/>SSC
					<input type="checkbox" name="hsc" value="HSC"/>HSC
					<input type="checkbox" name="bsc" value="BSC"/>BSC
					<input type="checkbox" name="msc" value="MSC"/>MSC
				</td>
				<td><span style="color:red;">* <?php echo $examErr;?></span></td>
			</tr>
			<tr>
				<td><b>Blood Group :</b></td>
				<td>
					<select name="bloodGroup">
						<option value="none"></option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select>
				</td>
				<td><span style="color:red;">* <?php echo $bgErr;?></span></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>
		
		
		
		
		
		
		
		
		
		
		
		
	</form>
	<br><br>
	<?php
	if($name!="" && $email!="" && $date!="" && $exam!="" && $gender!="" && $bloodGroup!="")
		{
			echo "<h3>Name : $name</h3>";
			echo "<h3>Email : $email</h3>";
			echo "<h3>Date of Birth : $date</h3>";
			echo "<h3>Gender : $gender</h3>";
			echo "<h3>Degree : $exam</h3>";
			echo "<h3>Blood group : $bloodGroup</h3>";
		}
	?>
	
</body>
</html>