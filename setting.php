<?php

// メール情報
// メールホスト名・gmailでは smtp.gmail.com
define('MAIL_HOST','smtp.gmail.com');

// メールユーザー名・アカウント名・メールアドレスを@込でフル記述 ここの右側を、自分のメールアドレスに変えます その時に、gmailのセキュリティ設定を変更する必要があります
define('MAIL_USERNAME','	izuhokun9999@gmail.com');

// メールパスワード・上で記述したメールアドレスに即したパスワード　ここの右側も、変更します 上で入力したgmailアカウントのパスワードをそのまま入力します
define('MAIL_PASSWORD','Izuho0509');

// SMTPプロトコル(sslまたはtls)
define('MAIL_ENCRPT','ssl');

// 送信ポート(ssl:465, tls:587)
define('SMTP_PORT', 465);

// メールアドレス・ここではメールユーザー名と同じでOK　上で入力したものと同じです
define('MAIL_FROM','	izuhokun9999@gmail.com');

// 表示名 なんでもいいです
define('MAIL_FROM_NAME','wearekemomimi');

// メールタイトル　なんでもいいです
define('MAIL_SUBJECT','お問い合わせいただきありがとー');

?>
