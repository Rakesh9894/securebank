<html>
	<head>
		<title>SECURE BANK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- <link rel="stylesheet" href="main.css" /> -->
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secure_bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM contact";
	$result = $conn->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    ?>
    <table border="1" class="table table-bordered">
    	<tr>
    		<th>S.no</th>
    		<th>Name</th>
    		<th>Mobile</th>
    		<th>Email</th>
    		<th>Subject</th>
    		<th>Message</th>
    	</tr>
    <?php
    $i =1;
    while ($row = $result->fetch_assoc()) {
    	?>

    	<tr>
    		<td><?php echo $i++ ?></td>
    		<td><?php echo $row["name"] ?></td>
    		<td><?php echo $row["number"] ?></td>
    		<td><?php echo $row["email"] ?></td>
    		<td><?php echo $row["subject"] ?></td>
    		<td><?php echo $row["message"] ?></td>
    	</tr>
    	<?php
    }
    ?>
    </table>
<?php } else {
    echo "No records found";

}


?>
</div>
</body>
</html>