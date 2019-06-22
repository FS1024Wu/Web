<?php
session_start();
?>
<html>
<body>
<?php
include("config.php");
echo "connection successful";
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT name FROM fp WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
	while ($row = $result->fetch_assoc()){
		$_SESSION["name"] = $row["name"];     //saving user's name in the session 
		$_SESSION["username"] = $row["username"];
		$_SESSION["address"] = $row["address"];
		echo "welcome,".$row["name"]."to our shop";
		//echo "<script type='text/javascript'> alert('$msg');</script>";
		header("Location: shop.html");
	}
} 
	else {		
		//$msg="Your username or password is invalid";
		//echo "<script type='text/javascript'>alert('$msg');</script>"	
		echo "Error:".$sql."<br>".$conn->error;
		header("location: login.html");

	}
$conn->close();
?>
</body>
</html>