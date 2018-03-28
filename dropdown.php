<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empdept2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<select name= "dropdown">
<?php
$myData = mysqli_query($conn, "SELECT * FROM DEPT");
		while($record = mysqli_fetch_array($myData)){
			echo '<option value="' . $record['DEPTNO']. '.' . $record['DNAME']. '">' .$record['DEPTNO'].$record['DNAME']. '</option>';
			
		}

?>
</select>