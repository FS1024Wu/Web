<?php
session_start();
?>
<html>
<body>
<?php

session_destroy();
header("location: login.html");
?>
</body>
</html>