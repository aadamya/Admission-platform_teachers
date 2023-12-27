<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname   = 'admission_platform';

$config = mysqli_connect($hostname, $username, $password, $dbname);


$base_address = "http://localhost/admission_platform/";

if($config)
{
	echo "";

}
else
{
	echo "Connection Failed with Error".mysqli_connect_error();
}


?>