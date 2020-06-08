<?php

if (empty($_POST)) {
    echo 'Ошибка, отсутствуют обязательные параметры!';
    exit;
}

$hash = hash('sha256', implode(':', array(
    $_POST['ac_transfer'],
    $_POST['ac_start_date'],
    $_POST['ac_sci_name'],
    $_POST['ac_src_wallet'],
    $_POST['ac_dest_wallet'],
    $_POST['ac_order_id'],
    $_POST['ac_amount'],
    $_POST['ac_merchant_currency'],
    getenv('ADV_SECRET')
)));

if ($hash !== $_POST['as_hash']) {
    echo 'Ошибка, проверка платежа не пройдена!';
    exit;
}

$url = 'https://api.telegram.org/%s/sendMessage?';
$url = sprintf($url, getenv('TELEGRAM_BOT_TOKEN'));

$message = 'Оплата от "%s" на сумму "%s $" успешно проведена.';
$param = array(
    'chat_id' => '@dental_wiki_support',
    'text' => sprintf($message, $_POST['ac_comments'], $_POST['ac_amount'])
);
file_get_contents($url . http_build_query($param));

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Dental Wiki</title>
    </head>
    <body>
        <h1>Платеж успешно проведен, ссылку на видео можете получить у нашего менедженра:&nbsp;<a
                href="https://telete.in/dental_wiki_support">@dental_wiki_support</a></h1>
    </body>
</html>
