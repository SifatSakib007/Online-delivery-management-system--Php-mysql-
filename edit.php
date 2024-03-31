<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$st_name = $_POST['name'];
	$st_email = $_POST['email'];
	$st_num = $_POST['Pnumber'];
	$st_city = $_POST['city'];
	$st_branch = $_POST['branch'];
	$st_salary = $_POST['salary'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE staff SET name='$st_name',email='$st_email', number='$st_num',city='$st_city',branch='$st_branch',salary='$st_salary' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: report.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM staff WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
	$st_name = $user_data['name'];
	$st_email = $user_data['email'];
	$st_num  = $user_data['number'];
	$st_city = $user_data['city'];
	$st_branch = $user_data['branch'];
	$st_salary = $user_data['salary'];
}
?>
<html>

<head>
	<title>Edit User Data</title>
</head>

<body>
	

	<form name="update_user" method="post" action="edit.php">
		<table border="0" align="center">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $st_name; ?>></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $st_email; ?>></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="Pnumber" value=<?php echo $st_num; ?>></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" value=<?php echo $st_city; ?>></td>
			</tr>
			<tr>
				<td>Branch</td>
				<td><input type="text" name="branch" value=<?php echo $st_branch; ?>></td>
			</tr>
			<tr>
				<td>Salary</td>
				<td><input type="number" name="salary" value=<?php echo $st_salary; ?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>

</html>