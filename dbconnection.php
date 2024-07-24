
<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = ''; // Replace with your actual password
$db_name = 'jqajax'; // Replace with your actual database name

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
