<!DOCTYPE html>
<html>
<head>
	<title>Hostel Form Fill UP</title>
</head>
<body>
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