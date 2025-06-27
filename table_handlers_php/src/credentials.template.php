<?php

// +-------------------+
// |  Параметры FTP    |
// +-------------------+
$ftp_server = "your_server_address_here";
$ftp_user_name = "your_ftp_user_name_here";
$ftp_user_pass = "your_ftp_user_password_here";

// +------------------------+
// |  Доступ к Google API   |
// +------------------------+
$googleAccountKeyFilePath = __DIR__ . '/FST-OTM-cred.json';

// +--------------------------+
// |  Доступ к Telegram API   |
// +--------------------------+
$telegramBotToken = '000000000:AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
$telegramApiUrl = 'https://api.telegram.org/bot'.$telegramBotToken.'/';
$telegramChatId = '000000000';

// +--------------------------+
// |  Sentry DSN              |
// +--------------------------+
$sentryDsn = 'https://your_sentry_dsn_here';

?>
