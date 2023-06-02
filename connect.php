<?php
// Server variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Connecting to the server db
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Form data variables
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['date-of-birth'];
$age = $_POST['age'];
$doctorname = $_POST['doctorname'];
$branchnumber = $_POST['branch-number'];
$appointmentnumber = $_POST['appointmentnumber'];
$roomnumber = $_POST['room'];

// SQL query to insert data into the table
$sql = "INSERT INTO registration (firstName, lastName, dob, age, doctorname, branch_number, appointment_number, room_number)
        VALUES ('$firstname', '$lastname', '$dob', '$age', '$doctorname', '$branchnumber', '$appointmentnumber', '$roomnumber')";

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully";
    header("refresh:3; url=booking.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
