<?php

//########################################

function get_param($key) {
    return trim(htmlspecialchars($_GET[$key]));
}

//########################################

$amount = str_replace(',', '.', get_param('amount'));
$nickname = get_param('nickname');

if (empty($amount) || empty($nickname)) {
    echo <<<HTML
<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Dental Wiki</title>
    </head>
    <body>
        <p>
            Ошибка, невозможно сгенерировать ссылку для оплаты.<br/>
            Обратетесь к нашему менедженра:&nbsp;<a href="https://telete.in/dental_wiki_support">@dental_wiki_support</a>
        </p>
        <address>
          <p>
            Наши контактные данные:<br/>
            <a href="mailto:dentalwikimail@gmail.com">dentalwikimail@gmail.com</a><br/>
            г. Москва, ул. Прищвина 21/308
          </p>
        </address>
    </body>
</html>
HTML;
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
<html lang="ru">
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
        </form>
    </body>
</html>
