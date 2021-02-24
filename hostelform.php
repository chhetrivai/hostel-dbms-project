<!DOCTYPE html>
<html>
<head>
	<title>Hostel Form Fill UP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
input
{
     border-color: #08EDF9;
     border-radius: 5px;
}
p
{
   color:#357B7F;
}
.first
{
	color:#1164E7;
}
</style>
</head>
<body>
<<<<<<< HEAD
	<?php
	//define variables and set to empty array_values
	$nameErr= $emailErr = $genderErr= $rollno= $agreeErr = $facultyErr="";
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
	
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
			$submit=0;

		}else {

			// check if e-mail address is well-formed
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				$emailErr="Invalid email format";
				$submit=0;

			}
		}
		
		

		 if (empty($_POST["gender"])) {
		 	$genderErr = "Gender is required";
		 	$submit=0;

		 }
		 if(empty($_POST['checked'])){
				$agreeErr = 'You must agree to terms';
				$submit = 0;
		 }

		 if(empty($_POST["faculty"])) {
		 	$subjectErr = "You must select 1 ";
		 	$submit = 0;
		 }
		}
		?>
	<form method="POST" action = "hosteldb.php">
=======
	<form autocomplete="off" method="POST" action = "hosteldb.php">
>>>>>>> cebfc1ca5f55c5515e86556c6d52a854b482bbe6
		<table>
			<tr>
				<td  class="first">
					FirstName
					<td > <p class="notation">:</p></td>
				</td>
				<td>
				<input type="text" name="name" required>
				<span class="error">*<?php echo $nameErr;?></span>
			</td>
		</tr>
			<tr>
				<td  class="first">LastName</td><td > <p class="notation">:</p></td>
				<td>
					<input type="text" name="name" required >
					<span class="error">*<?php echo $nameErr;?></span>
				</td>
			</tr>
		<tr>
			<td  class="first">E-mail</td><td > <p class="notation">:</p></td>
			<td><input type="text" name="email" required>
				<span class="error">*<?php echo $emailErr;?></span>
			</td>
		</tr>
		<tr>
			<td  class="first">Address</td>
			<td > <p class="notation">:</p></td>
			<td>
			    <div class="autocomplete" style="width:300px;">
                <input id="myInput" type="text" name="district" placeholder="district"  test_input>
               </div>
			</td>
		</tr>
		<tr>
			<td  class="first">Phone no.</td>
			<td > <p class="notation">:</p></td>
			<td>
			<input type="text" name="phone" placeholder="9800000000" required="">
		</td>
		</tr>
		<tr>
			<td  class="first">Gender</td><td > <p class="notation">:</p></td>
			<td>
				<input type="radio" name="gender" value="male"  required="">Male
				<input type="radio" name="gender" value="female" required="">Female
			</td>
		</tr>
		<tr>
			<td  class="first">Choose your subject</td><td > <p class="notation">:</p></td>
			<td>
				<select name = "subject" required="">
				<option value="agriculture"></option>
				<option value="architecture">Architecture</option>
				<option value="civil">Civil</option>
				<option value="computer">Computer</option>
				<option value="electronics">Electronics</option>
				<option value="electrical">Electrical</option>
				<option value="mechanical">Mechanical</option>
			</select>
		    </td>
		</tr>
		<tr>
		   <td  class="first">Rollno</td>
		   <td > <p class="notation">:</p></td>
		    <td><input type="text" placeholder="PUR074BCT034"></td>
		</tr>
		<tr>
			<td  class="first">Upload your photo</td>
			<td > <p class="notation">:</p></td>
			<td>
				<input type="file" name="photo" required>
			</td>
		</tr>
		<tr>
			<td>
			 </td>
			 <td></td>
			<td>
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>