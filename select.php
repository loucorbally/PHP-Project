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

//1.  Create a database connection
$dbhost ="localhost";
$dbuser ="root";
$dbpassword="root";
$dbname = "HardwareSales";

$connection= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//Test if connection occured

if(mysqli_connect_errno()){
	die("DB connection failed: " .
		mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")"
			);
}


if (!$connection)
  {
  die('Could not connect: ' . mysqli_error());
  }

//2.  Perform Database Query

$result = mysqli_query($connection,"SELECT * FROM item");

echo "<table border='1'>
<tr>
<th>Item Code</th>
<th>Item Name</th>
<th>Item Quantity</th>
<th>Other Item Details</th>
</tr>";

//3. Use returned data 

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['item_code'] . "</td>";
  echo "<td>" . $row['item_name'] . "</td>";
  echo "<td>" . $row['item_quantity'] . "</td>";
  echo "<td>" . $row['other_item_details'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

//4.  Release returned data 

mysqli_free_result($result);

//5.  Close database connection

mysqli_close($connection);
?> 