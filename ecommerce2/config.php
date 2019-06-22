<html>
<body>
<?php
$servername = "localhost";
$username = "ppark11";
$password = "ppark11";
$dbname = "ppark11";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
?>
</body>
</html>

