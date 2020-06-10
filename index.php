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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, shrink-to-fit=no, user-scalable=no">
    <meta name="keywords" content="dental, dental wiki, лекций, вебинары, циклы, конгрессы, стати, книги, стоматология">
    <meta name="description" content="Dental Wiki | Большая база лекций, вебинаров, циклов, конгрессы, статей и книг по стоматологии">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
    <title>Dental Wiki | Большая база лекций, вебинаров, циклов, конгрессы, статей и книг по стоматологии</title>
    <style>
        html {
            background-color: #32c5fa
        }

        body {
            font-family: 'Roboto', sans-serif;
            text-align: center;
            margin: 2% 20%;
            background-color: white;
            border-radius: 250px;
            padding: 5px 20px
        }

        p {
            max-width: 80%;
            margin-left: 10%
        }

        a:hover {
            text-decoration: none
        }

        a {
            color: #32c5fa;
            text-decoration: none
        }

        footer {
            padding: 5px 0;
            border-top: 1px dotted #32c5fa
        }

        .img {
            max-width: 80%;
            border-radius: 20px 20px 0 0
        }

        .margin-top-5 {
            margin-top: 5%
        }

        .text-align-left {
            text-align: left
        }

        #main-text {
            border-bottom: 1px dotted #32c5fa;
            font-family: 'Modak', cursive;
            font-weight: 100;
            color: #fff;
            font-size: 93px;
            margin: 0;
            text-shadow: -0 -2px 0 #32C5FA,
            0 -2px 0 #32C5FA,
            -0 2px 0 #32C5FA,
            0 2px 0 #32C5FA,
            -2px -0 0 #32C5FA,
            2px -0 0 #32C5FA,
            -2px 0 0 #32C5FA,
            2px 0 0 #32C5FA,
            -1px -2px 0 #32C5FA,
            1px -2px 0 #32C5FA,
            -1px 2px 0 #32C5FA,
            1px 2px 0 #32C5FA,
            -2px -1px 0 #32C5FA,
            2px -1px 0 #32C5FA,
            -2px 1px 0 #32C5FA,
            2px 1px 0 #32C5FA,
            -2px -2px 0 #32C5FA,
            2px -2px 0 #32C5FA,
            -2px 2px 0 #32C5FA,
            2px 2px 0 #32C5FA,
            -2px -2px 0 #32C5FA,
            2px -2px 0 #32C5FA,
            -2px 2px 0 #32C5FA,
            2px 2px 0 #32C5FA
        }

        @media only screen and (max-width: 720px) {
            body {
                margin: 1% 5%
            }

            .img {
                max-width: 90%
            }
        }
    </style>
</head>
<body>
<header>
    <img class="img" src="assets/header.png" alt="Dental Wiki"/>
    <h1 id="main-text">Dental Wiki</h1>
    <p>
        Dental Wiki - это большая база лекций, вебинаров, циклов, конгрессы, статей и книг для абитуриентов, студентов
        и врачей-стоматологов от ведущих профессионалов в этой облости и эта база знаний постоянно растет
        и обновляеться новым материалом!
    </p>
</header>
<main>
    <div>
        <h2 class="text-align-left">Наши страницы:</h2>
        <ul class="text-align-left">
            <li><a href="https://telete.in/dental_wiki_support">Telegram</a></li>
        </ul>
    </div>
    <div>
        <h2 class="text-align-left">Наши преимущества:</h2>
        <ul class="text-align-left">
            <li>У нас самые низкие цены среди аналогичных площадок;</li>
            <li>Стоимость в несколько раз ниже официальной;</li>
            <li>Постоянное и стабильное обновление базы;</li>
            <li>Полная анонимность покупателя и продавца.</li>
        </ul>
    </div>
    <p class="margin-top-5">
        Осуществить оплату можно через платежную систему <a href="https://advCash.com" target="_blank">AdvCash</a>
        - эта платёжная система работает со всеми известными платежными системами и оплату можно осуществить
        в пару кликов, любой карты и любой валюты, конвертация валюты осуществляется автоматически!
    </p>
    <p class="margin-top-5">
        Повышайте свой профессионализм вместе с нами,<br/>
        приятных просмотров 😉
    </p>
</main>
<footer>
    <p>
        Наши контактные данные:<br/>
        <a href="mailto:dentalwikimail@gmail.com">dentalwikimail@gmail.com</a><br/>
        г. Москва, ул. Прищвина 21/308 <br/><br/>

        По всем вопросам обращайтесь к нашему:<br/>
        <a href="https://telete.in/dental_wiki_support" target="_blank">менеджеру</a>
        (<a href="https://telete.in/dental_wiki_support" target="_blank">@dental_wiki_support</a>)
    </p>
    <img class="img" src="assets/footer.png" alt="Dental Wiki"/>
</footer>
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
