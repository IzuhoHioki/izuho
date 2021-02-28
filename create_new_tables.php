<?php 
require_once('config.php');

$sql = "CREATE TABLE IF NOT EXISTS pre_user"
." ("
. "id INT AUTO_INCREMENT PRIMARY KEY,"
. "urltoken VARCHAR(128) NOT NULL,"
. "mail VARCHAR(50) NOT NULL,"
. "date DATETIME NOT NULL,"
. "flag TINYINT(1) NOT NULL DEFAULT 0"
.")ENGINE=InnoDB DEFAULT CHARACTER SET=utf8";
$stmt = $pdo->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS user"
." ("
. "id INT AUTO_INCREMENT PRIMARY KEY,"
. "name VARCHAR(128) NOT NULL,"
. "password VARCHAR(128) NOT NULL,"
. "mail VARCHAR(128) NOT NULL,"
. "status INT(1) NOT NULL DEFAULT 2,"
. "created_at DATETIME,"
. "updated_at DATETIME"
.")ENGINE=InnoDB DEFAULT CHARACTER SET=utf8";
$stmt = $pdo->query($sql);

?>