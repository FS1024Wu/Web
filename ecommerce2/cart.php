<?php
session_start();
?>
<html>
<body>
<?php
include("config.php");
echo "connected";

$sql="SELECT item FROM fp WHERE username ='$_SESSION['username']'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
	while ($row = $result->fetch_assoc()) {
		$_SESSION["item"] = $row["item"];     //saving user's name in the session 
		$_SESSION["username"] = $row["username"];
		$_SESSION["address"] = $row["address"];
	}
}	else {
		echo "invalid";
		header("location: login.html");
	}
$username = $_SESSION['username'];
$address = $_SESSION['address'];
$item = $_SESSION['item'];
header("location: login.html");

$conn->close();
?>
</body>
</html>