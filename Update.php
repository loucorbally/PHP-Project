<?php

// Check if the user has submitted data into the form

if (isset ($_POST ['submit'])){
	$deptno = $_POST ['deptno'];
	$loc = $_POST ['loc'];
	
	//Check if both fields have been entered
	if ($deptno && $loc){
		
			//Connect to the server and the empdept2 database
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
	
	// Check if that department exists
	$exists= mysqli_query ($conn,"SELECT * FROM dept WHERE DEPTNO = '$deptno' ") or die ("Query could not be completed");
	
	// Update the location field in the DEPT table
	if (mysqli_num_rows($exists) !=0){
		mysqli_query ($conn,"UPDATE DEPT SET LOC = '$loc' WHERE DEPTNO = '$deptno'") or die ("Update could not be applied");
		echo "Successful Location Updated";
			}else echo "That Dept No does not exist.  Please re-enter:";
					}else echo "You must enter values for both fields.  Please re-enter";
		
		
		
		
	}
	
?>
<html>
<head>
	<title>Update Example</title>
</head> 
<body>
<h2> Update Department Location </h2><br /><br />
<form action ="UPDATEDB.php" method ="POST">
<table>
<tr><td>Dept No:</td> <td> <input type ="text" id="deptno" name="deptno"> </td></tr>
<tr><td>Location:</td> <td> <input type ="text" id="loc" name="loc"> </td></tr>
<tr><td><input type ="submit" id="submit" name="submit" value = "Update Location"></td></tr>
</table>
</form>
</body>
</html>