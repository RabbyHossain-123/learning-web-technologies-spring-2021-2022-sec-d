<?php
	$nameError = "";
	$name = "";

	if(isset($_REQUEST['submit'])){
		if($_POST['name'] == null){
			$nameError = "Invalid Name";
		}else{
			$name = $_REQUEST['name'];
		}
	}
	
?>
<html>
<head>
  <title>Login for</title>
</head>
<body>
<form method="POST" action="">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?=$name?>"></td>
				<td><?=$nameError ?></td>
			</tr>
			    <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
			</table>
		</form>
</body>
</html>