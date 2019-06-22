<?php
session_start();
?>
<html>
<body>
<?php
include("config.php");
$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$question = $_POST["question"];
$answer = $_POST["answer"];
$email = $_POST["email"];
$address = $_POST["address"];

$sql="INSERT INTO fp (name,username,password,question,answer,email,address) VALUES ('$name', '$username', '$password','$question', '$answer','$email','$address')";
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully <br>";
} else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: login.html");
?>
</body>
</html>