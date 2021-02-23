<!DOCTYPE html>
<html>
<head>
	<title>Hostel Form Fill UP</title>
</head>
<body>
	<form method="POST" action = "HostelDb.ph">
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


		</table>
	</form>

</body>
</html>