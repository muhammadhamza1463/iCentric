<?php  
$Host         = 'localhost';
$Username     = 'root';
$Password     = '';
$DatabaseName = 'icentric';

$db = new PDO("mysql:host=$Host;dbname=$DatabaseName", $Username, $Password);
?>