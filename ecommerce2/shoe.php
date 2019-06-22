<?php
session_start();
?>
<html>
<body>
<?php
include("config.php");
echo "connected<br>";
$quantityhat1=$_POST["quantityhat1"]*55;
$quantityhat2=$_POST["quantityhat2"]*58;
$quantityhat3=$_POST["quantityhat3"]*45;
$quantityhat4=$_POST["quantityhat4"]*40;
$quantityhat5=$_POST["quantityhat5"]*50;
$quantityhat6=$_POST["quantityhat6"]*45;
$quantityhat7=$_POST["quantityhat7"]*53;
$quantityhat8=$_POST["quantityhat8"]*48;
    // check if name only contains letters and whitespace
    if (!preg_match("/[0-9]/$/",$quantityhat1)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityhat2)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityhat3)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityhat4)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityhat5)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityhat6)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityhat7)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityhat8)) {echo "Only letters and white space allowed"; }
	
$tt=$quantityhat1+$quantityhat2+$quantityhat3+$quantityhat4+$quantityhat5+$quantityhat6+$quantityhat7+$quantityhat8;
$sql="UPDATE fp SET item=item+'$tt' WHERE username ='$_SESSION['username']'"
if($conn->query($sql)===TRUE)
	echo "Your items added <br>";
else
	echo "Error: ".$sql."<br>".$conn->error;
$conn->close();
?>
</body>
</html>