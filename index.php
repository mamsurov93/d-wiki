<?php

//########################################

function get_param($key) {

    if (!isset($_GET[$key])) {
        return null;
    }

    return trim(htmlspecialchars($_GET[$key]));
}

//########################################

$amount = str_replace(',', '.', get_param('amount'));
$nickname = get_param('nickname');

if (!empty($amount) && !empty($nickname)) {

    $m_shop = '1056524322';
    $m_orderid = time();
    $m_amount = number_format($amount, 2, '.', '');
    $m_curr = 'USD';
    $m_desc = base64_encode('Test');
    $m_key = '123';
    $sign = strtoupper(hash('sha256', implode(':', array($m_shop, $m_orderid, $m_amount, $m_curr, $m_desc, $m_key))));

    echo <<<HTML
<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Dental Wiki</title>
        <script>function load() {document.pay.submit();}</script>
    </head>
    <body onload="load()">
        <form id="pay" name="pay" method="POST" action="https://payeer.com/merchant/">
            <input type="hidden" name="m_shop" value="{$m_shop}" />
            <input type="hidden" name="m_orderid" value="{$m_orderid}" />
            <input type="hidden" name="m_amount" value="{$m_amount}" />
            <input type="hidden" name="m_curr" value="{$m_curr}" />
            <input type="hidden" name="m_desc" value="{$m_desc}" />
            <input type="hidden" name="m_sign" value="{$sign}" />
        </form>
    </body>
</html>
HTML;
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, viewport-fit=cover, shrink-to-fit=no, user-scalable=no">
    <meta name="keywords" content="dental, dental wiki, лекций, вебинары, циклы, конгрессы, стати, книги, стоматология">
    <meta name="description"
          content="Dental Wiki | Большая база лекций, вебинаров, циклов, конгрессы, статей и книг по стоматологии">
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

        #payload input {
            display: block;
            margin-left: 20px;
            margin-top: 5px;
            font-size: 15px;
        }

        .myButton {
            box-shadow: inset 0 1px 0 0 #97c4fe;
            background: #32C5FA linear-gradient(to bottom, #32C5FA 5%, #329cff 100%);
            border-radius: 6px;
            border: 1px solid #32C5FA;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            font-weight: 100;
            padding: 6px 24px;
            text-shadow: 0 1px 0 #32C5FA;
        }

        .myButton:hover {
            background: #1e62d0 linear-gradient(to bottom, #329cff 5%, #32C5FA 100%);
        }

        .myButton:active {
            position: relative;
            top: 1px;
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
            <li>Постоянное и стабильное обновление базы.</li>
        </ul>
    </div>
    <div>
        <h2 class="text-align-left">Форма для оплаты:</h2>
        <form id="payload" method="GET" class="text-align-left">
            <label>
                <input type="text" name="nickname" placeholder="nickname или телефон" size="30" required=""/>
            </label>
            <input type="text" name="amount" placeholder="сумма ($)" size="30" required=""/>
            <input type="submit" class="myButton" value="Оплатить"/>
        </form>
        <ul class="text-align-left">
            <li>
                После оплаты Вы сможете получить ссылку на<br/>
                любой курс равен сумме перевода у нашего менеждера: <br/>
                <a href="https://telete.in/dental_wiki_support" target="_blank">@dental_wiki_support</a>
            </li>
        </ul>
    </div>
    <p class="margin-top-5">
        Повышайте свой профессионализм вместе с нами,<br/>
        приятных просмотров 😉
    </p>
</main>
<footer>
    <p>
        По всем вопросам обращайтесь к<br/>
        нашему менеджеру в телеграме:<br/>
        <a href="https://telete.in/dental_wiki_support" target="_blank">@dental_wiki_support</a>
    </p>
    <img class="img" src="assets/footer.png" alt="Dental Wiki"/>
</footer>
</body>
</html>
