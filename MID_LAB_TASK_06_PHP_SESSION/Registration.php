<html>
<head>
	<title>Signup form</title>
</head>
<body>
<fieldset >
	<legend>Registration</legend>
	<form method="POST" action="regCheck.php">
		<table>


		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="">

			</td>
		</tr>

			<tr>
				
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			<tr>
				
				<td>
				<fieldset>

<legend> Gender</legend>
<input type="radio" name="gender"> Male
		<input type="radio" name="gender"> Female
		<input type="radio" name="gender"> Other 
</fieldset>
				</td>
			
				 
</fieldset>
			</tr>
			<tr>
<td>


			<fieldset>

<legend> Date of Birth</legend>
<input type="date" name="" value="">
		 
</fieldset>
</td>
</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td>  <input type="reset" name="reset" value="reset"> </td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>




