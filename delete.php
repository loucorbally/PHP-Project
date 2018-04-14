<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="Insert.php">Insert</a></li>
  <li><a href="select.php">Select</a></li>
  <li><a href="Update.php">Update</a></li>
  <li><a href="delete.php">Delete</a></li>
</ul>





<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "HardwareSales";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result=mysqli_query($conn, "SELECT * FROM client");

?>

<table border ="1">
	<tr>
		<th>Client Name</th>
		<th>Client Address</th>
		<th>Other Client Details</th>
		<th>Delete</th>
		<th></th>
	<tr>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$client_name = $row['client_name'];
	$client_addr = $row['client_addr'];
	$other_client_details = $row['other_client_details'];
?>

<tr>
	
	<td><?php echo $client_name;?></td>
	<td><?php echo $client_addr;?></td>
	<td><?php echo $other_client_details;?></td>
	<td>
		<a href ="delete.php?delete=<?php echo $client_name;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM DEPT WHERE client = '$delete_id'");
		
		header("location: delete.php");
	}
	?>
</table>