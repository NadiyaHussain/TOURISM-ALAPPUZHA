<html>
<body>
<?php
$server = 'localhost';
$user = 'root' ;
$password = '' ;
$db = 'tourismalappuzha';
$con = new mysqli($server, $user, $password, $db);
if($con) {
//echo "Database created";
	//die("connection failed:" . $con->connect_error);
}
else
{
echo "database not created";
}
?>
</body>
</html>
