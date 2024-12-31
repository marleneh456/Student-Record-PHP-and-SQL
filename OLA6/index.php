<!-- Name: Marlene Habib -->
<!-- Instructor: Dr. Yang -->
<!-- OLA 6 -->
<!-- index.php -->
<!-- Date: 04-18-2024 -->
<!-- Due Date: 04-18-2024 --> 

<!-- Define HTML5 document -->

<!DOCTYPE HTML>

<!-- Declare html -->

<html>

<!-- Declare head -->

<head>

	<!-- The title of this assignment -->
	
	<title>Student Records</title>
	
	<!-- Link to ola6.css -->
	
    <link type="text/css" rel="stylesheet" href="index.css" />
	
	<!-- Link to Open Sans fonts -->
	
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	
<!-- End of head -->	
	
</head>

<!-- Declare body -->

<body>  

<!-- PHP section -->	

<?php
	// Create connection to the database
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "CSCI4410";

	// Create connection
	
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	echo "Connected successfully";

	// Select all records from Students 
	
	$sql = "SELECT * FROM Students";
	
	$result = mysqli_query($conn, $sql);
	
	$sql2 = "SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
	
	$columns = mysqli_query($conn, $sql2);

	// The Title of all students
	
	echo "<h2 class= 'all-students'>All Students</h2>";

	// Print all students table
	
	echo "<table class='all-students-table'>";

	// Table heading
	
	echo "<tr>";

	while ($row = mysqli_fetch_assoc($columns)) 
	{
		foreach ($row as $value) {
			echo "<th>" . $value . "</th>";
		}
	}
	echo "</tr>";

	// Table rows
	
	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	// Break two lines
	
	echo "<br>";
	echo "<br>";

	// Select all male students 
	
	$males = "SELECT * FROM Students WHERE Gender='Male'";
	
	$result = mysqli_query($conn, $males);
	
	$males2 = "SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
	
	$columns = mysqli_query($conn, $males2);

	// The Title of all the male students
	
	echo "<h2 class= 'all-male-students'>All Male Students</h2>";

	// Print all the male Table
	
	echo "<table class= 'all-male-students-table'>";

	// Table heading
	
	echo "<tr>";

	while ($row = mysqli_fetch_assoc($columns)) 
	{
		foreach ($row as $value) {
			echo "<th>" . $value . "</th>";
		}
	}
	echo "</tr>";

	// Table rows
	
	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	// Break two lines
	
	echo "<br>";
	echo "<br>";
	
	// Select all female students 
	
	$females = "SELECT * FROM Students WHERE Gender='Female'";
	
	$result = mysqli_query($conn, $females);

	$females2 = "SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
	
	$columns = mysqli_query($conn, $females2);

	// The Title of all the female students
	
	echo "<h2 class= 'all-female-students'> All Female Students</h2>";

	// Print all the female Table
	
	echo "<table class= 'all-female-students-table'>";

	// Table heading
	
	echo "<tr>";

	while ($row = mysqli_fetch_assoc($columns)) 
	{
		foreach ($row as $value) {
			echo "<th>" . $value . "</th>";
		}
	}
	echo "</tr>";

	// Table rows
	
	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	// Break two lines
	
	echo "<br>";
	echo "<br>";

	// Select all students older than 21 
	
	$studentsover = "SELECT * FROM Students WHERE Age > 21";
	
	$result = mysqli_query($conn, $studentsover);

	$studentsover2 = "SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
	
	$columns = mysqli_query($conn, $studentsover2);

	// The Title of all students over 21
	
	echo "<h2 class= 'all-over21-students'>All Students over 21</h2>";

	// Print all the students over 21 table
	
	echo "<table class= 'all-over21-students-table'>";

	// Table heading
	
	echo "<tr>";

	while ($row = mysqli_fetch_assoc($columns)) 
	{
		foreach ($row as $value) {
			echo "<th>" . $value . "</th>";
		}
	}
	echo "</tr>";

	// Table rows
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	//Break two lines
	
	echo "<br>";
	echo "<br>";


	// Select all students under 21 and display
	
	$studentsunder = "SELECT * FROM Students WHERE Age < 21";
	
	$result = mysqli_query($conn, $studentsunder);

	$studentsunder2 = "SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
	
	$columns = mysqli_query($conn, $studentsunder2);

	// The Title of all students under 21
	
	echo "<h2 class= 'all-under21-students' >All Students under 21</h2>";

	// Print all the students under 21 table
	
	echo "<table class= 'all-under21-students-table'>";

	// Table heading
	
	echo "<tr>";

	while ($row = mysqli_fetch_assoc($columns)) 
	{
		foreach ($row as $value) {
			echo "<th>" . $value . "</th>";
		}
	}
	echo "</tr>";

	// Table rows
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	// Break two lines 
	
	echo "<br>";
	echo "<br>";


	// Different majors values 
	
	$majors = "SELECT DISTINCT Major FROM Students";
	
	$result = mysqli_query($conn, $majors);

	$majors2 = "SELECT COLUMN_NAME
	FROM INFORMATION_SCHEMA.COLUMNS
	WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students' AND COLUMN_NAME = 'Major'";

	$columns = mysqli_query($conn, $majors2);

	// The Title of all the students majors
	
	echo "<h2 class= 'all-majors-students' >The Students Table of Different Majors</h2>";

	// Print all the major Table
	
	echo "<table class='all-students-major-table'>"; 

	// Table heading
	
	echo "<tr>";
	
	while ($row = mysqli_fetch_assoc($columns)) 
	{
		foreach ($row as $value) {
			echo "<th>" . $value . "</th>";
		}
	}
	echo "</tr>";

	// Table rows for the Major values
	
	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	// Break two lines
	
	echo "<br>";
	echo "<br>";

	// Select all students without phone number information
	
	$nophonenum = "SELECT * FROM Students WHERE Phone IS NULL";
	$result = mysqli_query($conn, $nophonenum);

	$nophonenum2 = "SELECT COLUMN_NAME
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
	
	$columns = mysqli_query($conn, $nophonenum2);

	// The Title of no phone number
	
	echo "<h2 class= 'all-nophonenum-students' >All Students without a phone number</h2>";

	// Print all no phone number Table
	
	echo "<table class= 'all-nophonenum-students-table'>"; 

	// Table heading
	
	echo "<tr>";

	while ($row = mysqli_fetch_assoc($columns)) 
	{
		foreach ($row as $value) {
			echo "<th>" . $value . "</th>";
		}
	}
	echo "</tr>";

	// Table rows
	
	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		foreach ($row as $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	// Break two lines
	
	echo "<br>";
	echo "<br>";

	// Insert a new row/tuple and check if the insert is successful

	$sql = "INSERT INTO Students
	VALUES (11,'Lilly Pad', '24681012', 'Art', 'Senior', 'LillyPad@mtsu.edu', 'Female', 23, '615-668-4499')";

	if ($conn->query($sql) === TRUE) 
	{
		echo "<p> New record inserted successfully </p>";
		
		$insert = "SELECT * FROM Students";
		
		$result = mysqli_query($conn, $insert);
		
		$insert2 = "SELECT COLUMN_NAME
					FROM INFORMATION_SCHEMA.COLUMNS
					WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
					
		$columns = mysqli_query($conn, $insert2);
		
		// The Title of the insert
		
		echo "<h2 class= 'all-insert-students' >Students Table After Inserting A New Student</h2>";
		
		// Print the table with the Insert
		
		echo "<table class= 'all-insert-students-table'>";
		
		// Table heading
		
		echo "<tr>";
		
		while ($row = mysqli_fetch_assoc($columns)) 
		{
			foreach ($row as $value) {
				echo "<th>" . $value . "</th>";
			}
		}
		echo "</tr>";
		
		// Table rows
		
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach ($row as $value) {
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		
	} else {
		echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
	}
	echo "<br>";
	echo "<br>";

	// Delete the tuple you just inserted and check if the delete is successful

	$sql = "DELETE FROM Students WHERE Name='Lilly Pad'";

	if ($conn->query($sql) === TRUE) 
	{
		echo "<p>Record deleted successfully</p>";
		
		
		$delete = "SELECT * FROM Students";
		
		$result = mysqli_query($conn, $delete);
		
		$delete2 = "SELECT COLUMN_NAME
					FROM INFORMATION_SCHEMA.COLUMNS
					WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
					
		$columns = mysqli_query($conn, $delete2);
		
		// The Title of the Delete
		
		echo "<h2 class= 'all-delete-students' >Students Table After Deleting A New Student</h2>";
		
		// Print the table after deleting the new Student
		
		echo "<table class= 'all-delete-students-table'>";
		
		// Table heading
		
		echo "<tr>";
		
		while ($row = mysqli_fetch_assoc($columns)) 
		{
			foreach ($row as $value) {
				echo "<th>" . $value . "</th>";
			}
		}
		echo "</tr>";
		
		// Table rows
		
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach ($row as $value) {
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "<p>Error: " . $sql . " " . $conn->error . " ";
	}

	// Break two lines
	
	echo "<br>";
	echo "<br>";

	// Update John Doe's phone number and check if the update is successful

	$sql = "UPDATE Students 
	SET Phone='321-654-0987' 
	WHERE Name='John Doe'";

	if ($conn->query($sql) === TRUE) {
		echo "<p>Phone number updated successfully</p>";
		
		$update = "SELECT * FROM Students";
		
		$result = mysqli_query($conn, $update);
		
		$update2 = "SELECT COLUMN_NAME
					FROM INFORMATION_SCHEMA.COLUMNS
					WHERE TABLE_SCHEMA ='CSCI4410' AND TABLE_NAME = 'Students'";
					
		$columns = mysqli_query($conn, $update2);
		
		// The Title of the update
		
		echo "<h2 class= 'all-update-students' >Students Table After Updating A New Phone Number</h2>";
		
		// Print the table after Update
		
		echo "<table class= 'all-update-students-table'>";
		
		// Table heading
		
		echo "<tr>";
		
		while ($row = mysqli_fetch_assoc($columns)) 
		{
			foreach ($row as $value) {
				echo "<th>" . $value . "</th>";
			}
		}
		
		echo "</tr>";
		
		// Table rows
		
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			foreach ($row as $value) {
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		
	} else {
		echo "<p>Error: " . $sql . " " . $conn->error . " ";
	}

		// Close connection
		$conn->close();
?>

<!-- End of PHP section -->

<!-- End of body -->

</body>

<!-- End of html -->

</html>
