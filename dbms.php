<?php
$servername='localhost';
$username='root';
$password='';
$dbname='dbms';

$conn= mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	 //echo "Conection Failed" or die (mysqli_error($conn));
	  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "Connected";
}

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$rno=$_POST['rno'];
	$phno=$_POST['phno'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$addr=$_POST['addr'];

$insert = "INSERT INTO db (name,rno,phno,email,dob,addr) VALUES ('$name','$rno','$phno','$email','$dob','$addr')";
$result = mysqli_query($conn,$insert) or die (mysqli_error($conn));
//header("Location:info.php");
if($result){
//		echo'<script language="javascript">';
//		echo 'alert("Data Inserted")';
//		echo'</script>';
	header("Location:info.php");
	}
	else{
		echo '<script language="javascript">';
            echo 'alert("data insertion Failed")';
            echo '</script>';
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<title>DBMS Project</title>
	<style type="text/css">
		.center {
    text-align: center;
   
}
	</style>
</head>
<body>
	<div class="jumbotron"><center><h1>STUDENT DATABASE</h1></div>
		<div class="center">
	<fieldset>
		<div  >
<form action="" method="POST">
	<LABEL>Name :</LABEL>
	<input type="text" name="name" placeholder="Enter name" required><br><br>
	<label>Roll no :</label>
	<input type="number" name="rno" placeholder="Enter Roll no" required><br><br>
	<label>Phone no : </label>
	<input type="number" name="phno" placeholder="eg.9876543210"><br><br>
	<label> Email id : </label>
	<input type="email" name="email" placeholder="eg. abc@xyz.com"><br><br>
	<label> Date of Birth :</label>
	<input type="date" name="dob" required><br><br>
	<label>Address :</label>
		 <textarea rows="3" name="addr"></textarea><br><br>	</div>
		 <button name="submit" class="btn btn-success">SAVE</button>
		 <button type="button" class="btn btn-info" onclick="location.href='info.php';" value="Go to check">UPDATE</button>
		<button type="button" class="btn btn-info" onclick="location.href='marks.php';" value="Go to check">VIEW</button></center>
		
</form></fieldset></div>
</body>
</html>