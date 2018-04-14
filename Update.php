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

// Check if the user has submitted data into the form

if (isset ($_POST ['submit'])){
	$client_name = $_POST ['client_name'];
	$client_addr = $_POST ['client_addr'];
	
	//Check if both fields have been entered
	if ($client_name && $client_addr){
		
			//Connect to the server and the empdept2 database
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
	
	// Check if that department exists
	$exists= mysqli_query ($conn,"SELECT * FROM client WHERE client_name = '$client_name' ") or die ("Query could not be completed");
	
	// Update the location field in the client table
	if (mysqli_num_rows($exists) !=0){
		mysqli_query ($conn,"UPDATE client SET client_addr = '$client_addr' WHERE client_name = '$client_name'") or die ("Update could not be applied");
		echo "Successful Location Updated";
			}else echo "That Dept No does not exist.  Please re-enter:";
					}else echo "You must enter values for both fields.  Please re-enter";
		}
	


		if (mysqli_num_rows($exists) !=0){
			mysqli_query ($conn,"UPDATE client SET other_client_details = '$other_client_details' WHERE client_name = '$client_name'") or die ("Update could not be applied");
			echo "Successful Location Updated";
				}else echo "That Dept No does not exist.  Please re-enter:";
						
			

					
	
?>
<html>
<head>
	<title>Update Example</title>
</head> 
<body>
<h2> Update Client Address</h2><br /><br />
<form action ="Update.php" method ="POST">
<table>
<tr><td>Client Name:</td> <td> <input type ="text" id="client_name" name="client_name"> </td></tr>
<tr><td>Client Address:</td> <td> <input type ="text" id="client_addr" name="client_addr"> </td></tr>
<tr><td>Other Client Details:</td><td><input type ="text" id="other_client_details" name="other_client_details"></td></tr>
                


<tr><td><input type ="submit" id="submit" name="submit" value = "Update Location"></td></tr>
</table>
</form>
</body>
</html>