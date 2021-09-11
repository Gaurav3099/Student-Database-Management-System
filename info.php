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
	$rno=$_POST['rno'];
	$phy=$_POST['phy'];
	$chem=$_POST['chem'];
	$math=$_POST['math'];
	$cs=$_POST['cs'];
	$evs=$_POST['evs'];	
	$spact=$_POST['spact'];
	
$insert = "UPDATE db SET phy='$phy',chem='$chem',math='$math',cs='$cs',evs='$evs',spact='$spact' where rno='$rno'";
$result = mysqli_query($conn,$insert) or die (mysqli_error($conn));

if($result){
	echo '<script language="javascript">';
            echo 'alert("Data Inserted")';
            echo '</script>';
}
else
{
	echo '<script language="javascript">';
            echo 'alert("data insertion Failed")';
            echo '</script>';
}
}
if (isset($_POST['delete'])) {
	$rno=$_POST['rno'];
// sql to delete a record
$sql = "DELETE FROM db WHERE rno='$rno'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}
$sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<title>Student Info</title>
	<style type="text/css">
	.center{
		text-align: center;
	}
	</style>
</head>
<body>
	<div class="center"><center>
		<h3>ENTER STUDENTS DATA</h3>
<form action="" method="POST">
	<label>Roll no :</label>
	<input type="number" name="rno" required><br><br>
	<h5>Enter Marks of Student</h5>
	<label>Physics :</label>
	<input type="number" name="phy"><br><br>
	<label>Chemistry :</label>
	<input type="number" name="chem"><br><br>
	<label>Maths :</label>
	<input type="number" name="math"><br><br>
	<label>Computer Science :</label>
	<input type="number" name="cs"><br><br>
	<label>EVS :</label>
	<input type="number" name="evs"><br><br>
	<label>Extra Carricular Activity :</label>
	<input type="text" name="spact"><br><br>
	<button name="submit" class="btn btn-success">SUBMIT</button>
	<button name="submit" class="btn btn-success" >UPDATE</button><br><br>
	<button name="delete" class="btn btn-danger">DELETE</button>
	<button type="button" class="btn btn-info" onclick="location.href='marks.php';" value="Go to check">VIEW</button></<center></div>
</form>
</body>
</html>