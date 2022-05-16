<?php
require_once 'connect.php';
$connec->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
PDO::FETCH_OBJ);
$stmt = $connec->query('SELECT * FROM produse');
?>