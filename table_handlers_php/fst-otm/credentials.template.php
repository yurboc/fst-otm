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
$googleServiceAccount = [
    'type' => 'service_account',
    'project_id' => 'your_project_id_here',
    'private_key_id' => 'your_private_key_id_here',
    'private_key' => "-----BEGIN PRIVATE KEY-----\nyour_private_key_here\n-----END PRIVATE KEY-----\n",
    'client_email' => 'your_name_here@your_project_id_here.iam.gserviceaccount.com',
    'client_id' => 'your_client_id_here',
    'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
    'token_uri' => 'https://oauth2.googleapis.com/token',
    'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
    'client_x509_cert_url' => 'https://www.googleapis.com/robot/v1/metadata/x509/your_name_here%40your_project_id_here.iam.gserviceaccount.com'
];

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
