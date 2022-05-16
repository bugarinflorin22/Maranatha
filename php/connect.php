<?php
try {
$dbhost = 'localhost';
$dbname='maranatha';
$dbuser = 'root';
$dbpass = '';
$connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}catch (PDOException $e) {
echo "Error : " . $e->getMessage() . "<br/>";
die();
}
?> 