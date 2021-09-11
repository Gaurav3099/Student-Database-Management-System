<?php
$servername='localhost';
$username='root';
$password='';
$dbname='gauravtest';

$conn= mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	 //echo "Connection Failed" or die (mysqli_error($conn));
	  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "Connected";
}

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];

$insert = "UPDATE userdetails SET name='$name', phone='$phone' where email='$email'";
$result = mysqli_query($conn,$insert) or die (mysqli_error($conn));


if($result){
	echo '<script language="javascript">';
            echo 'alert("Data Updated")';
            echo '</script>';
}
else
{
	echo '<script language="javascript">';
            echo 'alert("data updation Failed")';
            echo '</script>';
}


}

?>
<!DOCTYPE html>
<html>
<head>
	<title>test page</title>
</head>
<body>
<form action="" method="POST">
	<LABEL>NAME </LABEL>
	<input type="text" name="name"><br><br>
	<label>phone no. </label>
	<input type="number" name="phone"><br><br>
	<label> Email id </label>
	<input type="email" name="email"><br><br>
	<button name="submit">SUBMIT</button>

</form>
</body>
</html>