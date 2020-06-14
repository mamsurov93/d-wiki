<?php

if (!in_array($_SERVER['REMOTE_ADDR'], array('185.71.65.92', '185.71.65.189', '149.202.17.210'))) {
    echo 'Ошибка (code 1)';
    exit;
}

if (!isset($_POST['m_operation_id']) || !isset($_POST['m_sign'])) {
    echo 'Ошибка (code 2)';
    exit;
}

//########################################

$sign_hash = strtoupper(hash('sha256', implode(':', array(
    $_POST['m_operation_id'],
    $_POST['m_operation_ps'],
    $_POST['m_operation_date'],
    $_POST['m_operation_pay_date'],
    $_POST['m_shop'],
    $_POST['m_orderid'],
    $_POST['m_amount'],
    $_POST['m_curr'],
    $_POST['m_desc'],
    $_POST['m_status'],
    trim((string)getenv('PAYEER_KEY'))
))));

if ($_POST['m_sign'] != $sign_hash || $_POST['m_status'] != 'success') {
    echo "{$_POST['m_orderid']}|error";
    exit;
}

//########################################

$url = 'https://api.telegram.org/%s/sendMessage?';
$url = sprintf($url, getenv('TELEGRAM_BOT_TOKEN'));

$message = 'Оплата от "%s" на сумму "%s $" успешно проведена.';
$param = array(
    'chat_id' => '@dental_wiki_support',
    'text' => sprintf($message, base64_decode($_POST['m_desc']), $_POST['m_amount'])
);
file_get_contents($url . http_build_query($param));
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Dental Wiki</title>
</head>
<body>
<h1>
    Платеж успешно проведен, ссылку на видео можете получить у нашего менедженра:&nbsp;
    <a href="https://telete.in/dental_wiki_support">@dental_wiki_support</a>
</h1>
<div><?php echo $_POST['m_orderid'] . '|success'; ?></div>
</body>
</html>
