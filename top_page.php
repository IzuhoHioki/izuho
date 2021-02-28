<?php
session_start();
$name = $_SESSION["NAME"];
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>top_page</title>
    </head>
    <body>
        <p><?php echo $name."さん"?></p>
        <br>
        <a href="logout.php">ログアウト</a>
    </body>
</html>