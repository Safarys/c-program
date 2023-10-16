<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<h1 align="center" style="border: blue;border-width: 6px;border-style: solid">Registration form</h1>
	
</head>
<link rel="stylesheet" type="text/css" href="ext.css">
<style type="text/css">
	body{
		background-color: rgb(30,75,120)
	}
	table{
		background-color: white;
	}
	tr{
		color: black;
	}
</style>
<body>
	<script type="text/javascript">
		function repeat() 
		{
			if (document.forms.F1.T1.value=="") 
			{
				window.alert("Enter Name");
				document.forms.F1.T1.focus();
			}

			if (document.forms.F1.T2.value=="") 
			{
				window.alert("Enter Dob");
				document.forms.F1.T2.focus();
			}
			if (document.forms.F1.gender.value=="") 
			{
				window.alert("Enter Gender");
				document.forms.F1.gender.focus();
			}
			if (document.forms.F1.co.value=="") 
			{
				window.alert("Please Complete the form!!!");
				document.forms.F1.co.focus();
			}
			if (document.forms.F1.T5.value=="") 
			{
				window.alert("Please Complete forms");
				document.forms.F1.T5.focus();
			}
		}
	</script>
	<form  action="reg.php" method="post" id="F1" onsubmit="return repeat()">
		
		<table border="2px bold" align="center" class="table_s">
			<tr>
				<td>
					<h2 align="center">Personal Information</h2>
				</td>
				
			</tr>
		<tr>
			<td><label>Name: </label>
		<input type="text" name="name" size="20" id="T1">
		<br><br>
	</td>
</tr>
<tr>
	<td>
		<label>Course:</label>
		<select id="co" name="co">
			<option value="Course" >Select Course</option>
			<option value="BA" id="co">BA</option>
			<option value="Bsc" id="co">Bsc</option>
			<option value="BCA" id="co">BCA</option>
		</select><br><br>
	</td>
</tr>
<tr>
	<td>
		<label>Gender:</label>
		<input type="radio" name="gender" id="gender" value="male">Male<br>
		<input type="radio" name="gender" id="gender" value="female">Female<br>
		<input type="radio" name="gender" id="gender" value="other">Other<br><br>
	</td>
	</tr>
	<tr>
		<td>
		<label>Date of Birth:</label>
		<input type="date" name="dob" id="T2"><br><br>
	</td>
</tr>
	<tr>
		<td>
		<label>Address:</label>
		<input type="text" name="address" id="T5"><br><br>
	</td>
</tr>
<tr>
	<td>
		<label>Phone Number:</label>
		<input type="number" name="phno"><br><br>
		</td></tr>
		<tr><td>
			<label>Guardian:</label>
		<input type="text" name="guar"><br><br>
		</td></tr>
		<tr><td>
			<label>Hobbies:</label>
		<input type="text" name="hob"><br><br>
		</td></tr>
		<tr><td>
			<label>Extra curricular activities</label>
		<input type="text" name="eca"><br><br>
		</td></tr>
		<tr><td>
			<input type="submit" name="submit">
		</td></tr>
		
	</table>
</form>
</body>
</html>
<?php
$a=$_POST['name'];
$b=$_POST['co'];
$c=$_POST['gender'];
$d=$_POST['dob'];
$e=$_POST['address'];
$f=$_POST['hob'];
$g=$_POST['phno'];
$h=$_POST['guar'];
$i=$_POST['eca'];

echo "Name : ",$a;
echo '<br>';
echo "Course : ",$b;
echo '<br>';
echo "Gender : ",$c;
echo '<br>';
echo "Date of Birth : ",$d;
echo '<br>';
echo "Address : ",$e;
echo '<br>';
echo "Phone Number : ",$g;
echo '<br>';
echo "Guardian Name : ",$h;
echo '<br>';
echo "Hobbies : ",$f;
echo '<br>';
echo "Extra Curricular Activities : ",$i;
echo '<br>';
