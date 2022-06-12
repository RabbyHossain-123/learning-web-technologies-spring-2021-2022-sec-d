<?php
$ispost=false;
$username="";
//check whether the button is clicked or not
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
	

?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>

<br><br>
Password:<input type="password" id="pass" name="pass"><br><br>
Gender: <input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Others"> Others<br><br>
Skills: <input type="checkbox" name="skills[]" value="c">C
<input type="checkbox" name="skills[]" value="c++">C++
<input type="checkbox" name="skills[]" value="c#">C# <br><br>
Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</select><br><br>
Address:<textarea rowspan="3" colspan="50" name="address"></textarea>
<br><br><br>
<input type="submit" name="btnClick" value="Click">
</form>