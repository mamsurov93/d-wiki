<?php

//########################################

function get_param($key) {
    return trim(htmlspecialchars($_GET[$key]));
}

//########################################

$amount = str_replace(',', '.', get_param('amount'));
$nickname = get_param('nickname');

if (empty($amount) || empty($nickname)) {
    echo 'Ошибка, невозможно сгенерировать ссылку для оплаты!';
    exit;
}

$email = getenv('ADV_EMAIL');
$name = getenv('ADV_NAME');
$currency = 'USD';
$orderId = time();
$secret = getenv('ADV_SECRET');
$sign = hash('sha256', implode(':', array($email, $name, $amount, $currency, $secret, $orderId)));

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dental Wiki</title>
        <script>function load() {document.pay.submit();}</script>
    </head>
    <body onload="load()">
        <form id="pay" name="pay" method="POST" action="https://wallet.advcash.com/sci/">
            <input type="hidden" name="ac_account_email" value="<? echo $email; ?>" />
            <input type="hidden" name="ac_sci_name" value="<? echo $name; ?>" />
            <input type="hidden" name="ac_amount" value="<? echo $amount; ?>" />
            <input type="hidden" name="ac_currency" value="<? echo $currency; ?>" />
            <input type="hidden" name="ac_order_id" value="<? echo $orderId; ?>" />
            <input type="hidden" name="ac_sign" value="<? echo $sign; ?>" />
            <input type="hidden" name="ac_comments" value="<? echo $nickname; ?>">
            <input type="hidden" name="login" value="<? echo $nickname; ?>" />
        </form>
    </body>
</html>
