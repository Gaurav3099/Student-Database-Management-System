<?php
include ('connect.php');
 $view = "SELECT * FROM userdetails";
 $result = mysqli_query($conn, $view) or die(mysqli_error($conn));

$delete= "DELETE FROM userdetails where name='demotest'";
$result1 = mysqli_query($conn, $delete) or die(mysqli_error($conn));
?>

<html>
<head>
	<title>Table</title>
</head>
<body>
	<table border="1" width="100" height="100">
		<tr>
			<th>Name</th>
			<th>phone</th>
			<th>email</th>
			<th>password</th>
		</tr>
		<?php
		while ($data= mysqli_fetch_assoc($result)) {
		?>
		
		<tr>
		<td><?php echo $data['name'];?></td>
		<td><?php echo $data['phone'];?></td>
		<td><?php echo $data['email'];?></td>
		<td><?php echo $data['password'];?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>