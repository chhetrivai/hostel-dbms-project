<!DOCTYPE html>
<html>
<head>
	<title>Hostel Form Fill UP</title>
</head>
<body>
	<?php
	//define variables and set to empty array_values
	$nameErr= $emailErr = $genderErr= $batcErr= $agreeErr = "";
	$name = $email = $gender = $class = $batch = $agree="";
	$submit =0;

	if($_SERVER["REQUEST_METHOD"] =="POST"){
	if(empty($_POST["name"])) {
		$nameErr = "Name is required";
		 $submit =0;
	}else {
		$name = test_input($_POST["name"]);
		// check if name is well-suited
		if(preg_match("/[^A-Za-z'-]/", $_POST["name"])){
			$nameErr="invalid name";
        $submit=0;
		}
		else
		$submit=1;
		}
	}
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
			$submit=0;

		}else {
			$email=test_input($_POST["email"]);

			// check if e-mail address is well-formed
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				$emailErr="Invalid email format";
			}
		}
		if (empty($_POST["course"])) {
			$course = "";
		}else {
			$course=test_input($_POST["course"]);

		}
		if (empty($_POST["class"])) {
			$class="";
		}
		else {
			$class = test_input($_POST["class"]);
		}

		 if (empty($_POST["gender"])) {
		 	$genderErr = "Gender is required";
		 }
		 else{
		 	$gender = test_input($_POST["gender"]);
		 }
		 if(empty($_POST['checked']))
				$agreeErr = 'You must agree to terms';

		 if(empty($_POST["subject"])) {
		 	$subjectErr = "You must select 1 or more";
		 }else {
		 	$subject = $_POST["subject"];

		 }
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	<form method="POST" action = "hosteldb.php">
		<table>
			<tr>
				<td>
					FirstName:
				</td>
				<td>
				<input type="text" name="name">
				<span class="error">*<?php echo $nameErr;?></span>
			</td>
				<td>LastName:
				</td>
				<td>
					<input type="text" name="name">
					<span class="error">*<?php echo $nameErr;?></span>
				</td>
			</tr>

		<tr>

			<td>E-mail:</td>
			<td><input type="text" name="email">
				<span class="error">*<?php echo $emailErr;?></span>
			</td>
		</tr>
		<tr>
			<td>Select:</td>
			<td>
				<select name = "subject[]" size="4" multiple>
				<option vlaue ="java">java</option>
				<option value="c#">c#</option>

				<option value="Data Base">Data Base</option>
				<option value="Hadoop">Hadoop</option>
				<option value="VB script">VB script</option>
			</select>
			<span class="error">*<?php echo $subjectErr;?></span>


		</table>
	</form>

</body>
</html>