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

$result=mysqli_query($conn, "SELECT * FROM DEPT");

?>

<table border ="1">
	<tr>
		<th>Dept No</th>
		<th>Dept Name</th>
		<th>Location</th>
		<th>Delete</th>
		<th></th>
	<tr>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$deptno = $row['DEPTNO'];
	$dname = $row['DNAME'];
	$loc = $row['LOC'];
?>

<tr>
	
	<td><?php echo $deptno;?></td>
	<td><?php echo $dname;?></td>
	<td><?php echo $loc;?></td>
	<td>
		<a href ="DELETEDB.php?delete=<?php echo $deptno;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM DEPT WHERE DEPTNO = '$delete_id'");
		
		header("location: DELETEDB.php");
	}
	?>
</table>