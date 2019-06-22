<?php
session_start();
?>
<html>
<body>
<?php
include("config.php");
echo "connected";
$cardnumber=$_POST["cardnumber"];
$cardfront = $cardnumber/100000000000000;
if( $cardfront >=40 && $cardfront <50)
	echo "visa";
else if ( $cardfront ==34 || $cardfront == 37)
	echo "American Express";
else if ( $cardfront > 50 && $cardfront <=  50)
	echo "Master Card";
else	
	echo "Discover Card or undefined.";

$conn->close();
?>
</body>
</html>