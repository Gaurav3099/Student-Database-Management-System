<?php
include ('dbcon.php');
 $view = "SELECT * FROM db";
 $result = mysqli_query($conn, $view) or die(mysqli_error($conn));

//$delete= "DELETE FROM userdetails where name='demotest'";
//$result1 = mysqli_query($conn, $delete) or die(mysqli_error($conn));

 if (isset($_POST['delete'])) {
	$rno=$_POST['rno'];
// sql to delete a record
//$sql = "DELETE FROM db WHERE rno='$rno'";
$sql= "DELETE FROM db where rno='$rno'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}
// sql to delete a record


?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<title>Student data</title>
</head>
<body>
	<center>
		<h3>STUDENTS DATA</h3>
	<table border="1" width="100" height="100">
		<tr>
			<th>Name</th>
			<th>Roll no</th>
			<th>Phone no</th>
			<th>Email id</th>
			<th>Date of Birth</th>
			<th>Address</th>
			<th>Physics</th>
			<th>Chemistry</th>
			<th>Maths</th>
			<th>Computer Science</th>
			<th>EVS</th>
			<th>Extra Carricular Activity</th>
			
			
		</tr>
		<?php
		while ($data= mysqli_fetch_assoc($result)) {
		?>
		
		<tr>
		<td><?php echo $data['name'];?></td>
		<td><?php echo $data['rno'];?></td>
		<td><?php echo $data['phno'];?></td>
		<td><?php echo $data['email'];?></td>
		<td><?php echo $data['dob'];?></td>
		<td><?php echo $data['addr'];?></td>
		<td><?php echo $data['phy'];?></td>
		<td><?php echo $data['chem'];?></td>
		<td><?php echo $data['math'];?></td>
		<td><?php echo $data['cs'];?></td>
		<td><?php echo $data['evs'];?></td>
		<td><?php echo $data['spact'];?></td>
		</tr>
		<?php } ?>
	</table><br><br>
	<form action="" method="POST">
	<label>Roll no :</label>
	<input type="number" name="rno" required><br><br>
	
   <button name="update"  class="btn btn-success" onclick="location.href='info.php';" value="Go to check">UPDATE</button>
	<button name="delete" class="btn btn-danger">DELETE</button>
    </center></form>
</body>
</html>