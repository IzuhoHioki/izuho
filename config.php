<?php 

// ここの値をmission5-1と同じように変更します
$dsn = 'mysql:dbname=tb221200db;host=localhost';
$user = 'tb-221200';
$password = 'RwEwEH5Tmt';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

?>