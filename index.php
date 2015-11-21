<!DOCTYPE html>
<html>
<body>

<?php
echo "Ryan PHP script2!\n";
?>
<?php
$mysql = new mysqli("localhost", "root");
echo "MySQL Server info: ".$mysql->host_info;
?>
</body>
</html>