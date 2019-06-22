<?php
session_start();
?>
<html>
<body>
<?php
include("config.php");
echo "connected<br>";
$quantityd1=$_POST["quantityd1"]*15;
$quantityd2=$_POST["quantityd2"]*18;
$quantityd3=$_POST["quantityd3"]*25;
$quantityd4=$_POST["quantityd4"]*20;
$quantityd5=$_POST["quantityd5"]*20;
$quantityd6=$_POST["quantityd6"]*15;
$quantityd7=$_POST["quantityd7"]*23;
$quantityd8=$_POST["quantityd8"]*18;
    // check if name only contains letters and whitespace
    if (!preg_match("/[0-9]/$/",$quantityd1)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityd2)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityd3)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityd4)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityd5)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityd6)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityd7)) {echo "Only letters and white space allowed"; }
    if (!preg_match("/[0-9]/$/",$quantityd8)) {echo "Only letters and white space allowed"; }
	
$tt=$quantityd1+$quantityd2+$quantityd3+$quantityd4+$quantityd5+$quantityd6+$quantityd7+$quantityd8;
$sql="UPDATE fp SET item=item+'$tt' WHERE username ='$_SESSION['username']'"
if($conn->query($sql)===TRUE)
	echo "Your items added <br>";
else
	echo "Error: ".$sql."<br>".$conn->error;
$conn->close();
?>
</body>
</html>