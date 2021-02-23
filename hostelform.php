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
	<form autocomplete="off" method="POST" action = "hosteldb.php">
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
					<input type="text" name="name" >
					<span class="error">*<?php echo $nameErr;?></span>
				</td>
			</tr>
		<tr>
			<td  class="first">E-mail</td><td > <p class="notation">:</p></td>
			<td><input type="text" name="email">
				<span class="error">*<?php echo $emailErr;?></span>
			</td>
		</tr>
		<tr>
			<td  class="first">Address</td>
			<td > <p class="notation">:</p></td>
			<td>
			    <div class="autocomplete" style="width:300px;">
                <input id="myInput" type="text" name="district" placeholder="district" required>
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
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
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
			<span class="error">*<?php echo $subjectErr;?></span>
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