<!DOCTYPE html>
<html>
<body>
HELLO 中文
<?php
echo "Ryan PHP 中文script3!\n";
?>
<?php
$mysql = new mysqli("localhost", "root");
echo "MySQL Server info: ".$mysql->host_info;
?>
</body>
</html>