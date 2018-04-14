<!DOCTYPE html>
<html>
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
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hardware Sales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

     <main>
        <h1>Enter Client Information Here:</h1>
        <form action="Insert.php" method="post">

            <div id="data">
                <label>Client Name:</label>
                <input type="text" name="client_name"><br>

                <label>Client Address:</label>
                <input type="text" name="client_addr"><br>

                <label>Other Client Details:</label><br>
                <textarea name="other_client_details" rows="10" cols="30"></textarea> <br>

            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Submit"><br>
            </div>

        </form>


        
    </main>


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
        
        // Escape user inputs for security
        
        $client_name = $_POST['client_name'];
        
        $client_addr = $_POST['client_addr'];
        
        $other_client_details = $_POST ['other_client_details'];

        
         
        
        // attempt insert query execution
        
        mysqli_query($conn, "INSERT INTO client (client_name, client_addr, other_client_details) VALUES ('$client_name', '$client_addr', '$other_client_details')");

        
        if(mysqli_affected_rows($conn)>0){
        
            echo "Records added successfully.";
        
        } else{
        
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        
        }


        
        
        // close connection
        
        mysqli_close($conn);
        
        ?>
</head>
<body>

   
</body>
</html>
