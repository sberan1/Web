<?php
$host = "md49.wedos.net";
$userName = "w221557_sberan";
$password = "Mnichov88?";
$dbName = "d221557_sberan";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$yourName = $conn->real_escape_string($_POST['your_name']);
$yourSurname = $conn->real_escape_string($_POST['your_surname']);
$yourEmail = $conn->real_escape_string($_POST['your_email']);
$comments = $conn->real_escape_string($_POST['comments']);
$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourSurname."','".$yourEmail."', '".$comments."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>