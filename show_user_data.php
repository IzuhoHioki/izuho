<?php

require_once('config.php');

$sql = 'SELECT * FROM user';
$stmt = $pdo->query($sql);
$results = $stmt->fetchAll();
foreach ($results as $row){
	//$rowの中にはテーブルのカラム名が入る
	echo $row['id'].',';
	echo $row['name'].',';
	echo $row['password'].',';
	echo $row['mail'].',';
	echo $row['status'].',';
	echo $row['created_at'].',';
	echo $row['updated_at'].'<br>';
}
echo "<hr>";

?>