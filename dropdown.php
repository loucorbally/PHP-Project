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
  <li><a href="dropdown.php">Select</a></li>
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

?>
<select name= "dropdown">
<?php
$myData = mysqli_query($conn, "SELECT * FROM client");
		while($record = mysqli_fetch_array($myData)){
			echo '<option value="' . $record['client_name']. '.' . $record['client_addr']. '">' .$record['client_name'].$record['client_addr']. '</option>';
			
		}

		$myData = mysqli_query($conn, "SELECT * FROM purchase");
		while($record = mysqli_fetch_array($myData)){
			echo '<option value="' . $record['item_ordered']. '.' . $record['quantity_purchased']. '">' .$record['DEPTNO'].$record['DNAME']. '</option>';
			
		}

?>
</select>