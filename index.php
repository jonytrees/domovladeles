<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr(session_id(), mt_rand(0, 10), mt_rand(3, 10)) . time());

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'Домовладелец';
$desc = 'Современная удобная программа для предприятий ЖКХ';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();

?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">


<head>

    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">


    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.png" type="image/png">


    <!-- CSS styles -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/jquery.formstyler.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style-fix.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>


</head>


<body id="main">
<div id="global-wrapper">

    <!--===================================================== Loader -->
        <div class="loader">
            <div class="pseudo-table">
                <div class="pseudo-table-cell align-center">

<!--                    <div class="a-loader a-loader-2">-->
<!--                        <div class="bar-1"></div>-->
<!--                        <div class="bar-2"></div>-->
<!--                        <div class="bar-3"></div>-->
<!--                        <div class="bar-4"></div>-->
<!--                        <div class="bar-5"></div>-->
<!--                        <div class="bar-6"></div>-->
<!--                        <div class="bar-7"></div>-->
<!--                        <div class="bar-8"></div>-->
<!--                    </div>-->

                    <div class="loader-text">
                        <div class="transform-block">
                            <div class="block-green">
                                <h3>
                                    Домовладелец
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    <!--===================================================== Header -->
    <header class="layout-header">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-1-2">
                    <a href="tel:+74951203324" class="phone-link menu">
                            <span class="phone-icon">
                                <?php include('svg/phone.svg') ?>
                            </span>
                        +7 (495) 767-90-94
                    </a>
                    <div class="nav-block">
                        <div class="show-menu second-screen-block">
                            <div class="text">
                                Закрыть
                            </div>
                            <span class="icon-sandwich">
<!--                                --><?php //include ('svg/menu-burger.svg') ?>
                            </span>
                        </div>
                        <div class="nav-item"></div>
                    </div>
                </div>

                <!-- Phone block -->
                <div class="col-1-2">
                    <div class="si-phone">
                        <a href="tel:+74951203324" class="phone-link">
                            <span class="phone-icon">
                                <?php include('svg/phone.svg') ?>
                            </span>
                            +7 (495) 767-90-94
                        </a>
                        <a href="#" class="open-phone-modal consult" data-extra="1">Установить демо-версию</a>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">

        <div class="city">
            <img src="images/city.png" alt=" ">
        </div>

        <div class="phone">
            <img src="images/Shadow.png" alt=" ">
        </div>

        <div class="cloud-1 si-floating">
            <img src="images/cloud-1.png" alt=" ">
        </div>

        <div class="cloud-2 si-floating">
            <img src="images/cloud-2.png" alt=" ">
        </div>

        <div class="container">

            <div class="transform-block">
                <div class="block-green">
                    <h1>
                        Домовладелец
                    </h1>
                </div>
            </div>

            <h2 class="sub_title">
                Современная <br> удобная программа для предприятий ЖКХ
            </h2>

            <div class="numbers_block">
                <div class="number_block">
                    <div class="line"></div>
                    <div class="number">01.</div>
                    <div class="title">
                        7500
                    </div>
                    <div class="text">
                        внедрений в России
                    </div>
                </div>
                <div class="number_block">
                    <div class="line"></div>
                    <div class="number">02.</div>
                    <div class="title">
                        14
                    </div>
                    <div class="text">
                        дней - быстрое внедрение комплекса
                    </div>
                </div>
                <div class="number_block">
                    <div class="line"></div>
                    <div class="number">03.</div>
                    <div class="title">
                        45%
                    </div>
                    <div class="text">
                        сокращение<br>
                        расходов компании
                    </div>
                </div>
                <div class="number_block">
                    <div class="number">04.</div>
                    <div class="title">
                        80%
                    </div>
                    <div class="text">
                        экономия времени <Br>
                        при работе
                    </div>
                </div>
            </div>

            <!--            <div class="row">-->

            <!--                <div class="col-1-2">-->
            <div class="message-block">
                <div class="icon-block">
                    <div class="icon">
                        <?php include('svg/message.svg'); ?>
                    </div>
                </div>
                <div class="text-block">

                    <div class="wrapper-message-slider">

                        <!-- Swiper -->
                        <div class="swiper-container message-slider">
                            <div class="swiper-wrapper">

                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="text">
                                        Перейдите на Домовладелец - получите ГИС - Интеграцию, Мобильное приложение,сайт с личными
                                        кабинетами жителей БЕСПЛАТНО!
                                    </div>
                                </div>
                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="text">
                                        Перейдите на Домовладелец - получите ГИС - Интеграцию, Мобильное приложение,сайт с личными
                                        кабинетами жителей БЕСПЛАТНО!
                                    </div>
                                </div>
                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="text">
                                        Перейдите на Домовладелец - получите ГИС - Интеграцию, Мобильное приложение,сайт с личными
                                        кабинетами жителей БЕСПЛАТНО!
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Add Arrows -->
                        <div class="button-block">
                            <div class="swiper-button-next message-next">
                                <div class="right-arrow">
                                    <?php include('svg/right.svg'); ?>
                                </div>
                            </div>
                            <div class="swiper-button-prev message-prev">
                                <div class="left-arrow">
                                    <?php include('svg/left.svg'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </section>

    <!--===================================================== section gap -->
    <section class="section-gap" id="gap">
        <div class="container">
            <div class="white-blocks">
                <div class="flex-block">
                    <div class="white-block">
                        <div class="icon">
                            <div class="winner"></div>
                        </div>
                        <div class="text">
                            Победитель 3х конкурсов деловых программ<br> «Бизнес-софт»
                        </div>
                    </div>
                    <div class="white-block">
                        <div class="icon">
                            <div class="goal"></div>
                        </div>
                        <div class="text i-1">
                            Опыт работы на рынке
                            БОЛЕЕ 17 ЛЕТ
                        </div>
                    </div>
                    <div class="white-block">
                        <div class="icon">
                            <div class="web"></div>
                        </div>
                        <div class="text i-2">
                            Более функциональный и автоматизированный, чем обычное программное обеспечение
                        </div>
                    </div>
                </div>

                <div class="last-text">
                    <span>Перейдите на Домовладелец© —</span> получите мобильное приложение, сайт с кабинетом жителя
                    и ГИС-интеграцию <span class="desc">БЕСПЛАТНО</span>!
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section gap -->
    <section class="section-function" id="function">

        <div class="animate-block"></div>

        <div class="container">

            <div class="function-text">
                <h2>
                    Функциональные возможности <span>Домовладельца©</span>
                </h2>
                <div class="text">
                    <p>Расчет и перерасчет коммунальных платежей в соответствии с 354-ПП РФ,</p>
                    <p>любые начисления, счетчики, пени,</p>
                    <p>раздельный учет капремонта,</p>
                    <p>хранение всей истории лицевых счетов,</p>
                    <p>единая база данных бухгалтерии, паспортного<br> стола, жилфонда, аренды, юриста,</p>
                    <p>подробный учет жилфонда,</p>
                    <p class="colorScroll">паспортный учет в соответствии с требованиями УФМС,</p>

                    <p class="i-1 colorScroll">подомовой учет,</p>
                    <p class="i-2 colorScroll">личный кабинет жителя,</p>
                    <p class="i-3 colorScroll">ГИС ЖКХ: квитирование в 1 клик, интеграция, обновления, техподдержка,</p>
                    <p class="i-4 colorScroll">удобная работа с ККМ и Фискальными регистраторами, ОНЛАЙН - КАССА,</p>
                    <p class="i-5 colorScroll">обновленный ЕПД, QR-код,</p>
                    <p class="colorScroll">мобильное приложение "Домовладелец" для ANDROID и APPLE с возможностью оплаты за ЖКУ<br> с
                        минимальной банковской комиссией (0.8%)</p>.
                </div>
            </div>
            <div class="function-block">

                <div class="transform-block">
                    <div class="block-green">
                        <h3>
                            Домовладелец
                        </h3>
                    </div>
                </div>
                <p class="program">Программный комплекс</p>
                <div class="flex">
                    <div class="mini_block">
                        <div class="number">01.</div>
                        <div class="icon clipboard"></div>
                        <div class="text">
                            Справочники и нормативы
                        </div>
                    </div>
                    <div class="mini_block">
                        <div class="number">02.</div>
                        <div class="icon flat"></div>
                        <div class="text">
                            Жилищный фонд
                        </div>
                    </div>
                    <div class="mini_block">
                        <div class="number">03.</div>
                        <div class="icon work"></div>
                        <div class="text">
                            Юрист
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mini_block">
                        <div class="number">04.</div>
                        <div class="icon call"></div>
                        <div class="text">
                            Диспетчер
                        </div>
                    </div>
                    <div class="mini_block">
                        <div class="number">05.</div>
                        <div class="icon passport"></div>
                        <div class="text">
                            Паспортный стол
                        </div>
                    </div>
                    <div class="mini_block">
                        <div class="number">06.</div>
                        <div class="icon accounting"></div>
                        <div class="text">
                            Бухгалтерия
                        </div>
                    </div>
                </div>
                <div class="flex_mini">
                    <div class="mini_block">
                        <div class="number">07.</div>
                        <div class="icon manager"></div>
                        <div class="text">
                            Управление
                        </div>
                    </div>
                    <div class="mini_block">
                        <div class="number">08.</div>
                        <div class="icon logout"></div>
                        <div class="text">
                            Выход
                        </div>
                    </div>
                </div>

                <div class="block-green-big">
                    <div class="title">
                        Предназначен для
                    </div>

                    <div class="text">
                        Руководителей, бухгалтеров, паспортистов,
                        менеджеров клиентских отделов, экономистов, юристов, инженеров, диспетчеров.<br>
                        В Управляющих компаниях, ТСЖ, ТСН, ЖСК, коттеджных поселках, ресурсоснабжающих организациях,
                        расчетных центрах.
                    </div>

                    <div class="logo-block">
                        <img class="logo-1" src="images/logo/logo-1.png" alt=" ">
                        <img class="logo-2" src="images/logo/logo-2.png" alt=" ">
                        <img class="logo-3" src="images/logo/logo-3.png" alt=" ">
                        <img class="logo-4" src="images/logo/logo-4.png" alt=" ">
                        <img class="logo-5" src="images/logo/logo-5.png" alt=" ">
                        <img class="logo-6" src="images/logo/logo-6.png" alt=" ">
                    </div>
                </div>
                <div class="triangle-fio"></div>
            </div>

        </div>
    </section>

    <!--===================================================== section cause -->
    <section class="section-cause" id="cause">
        <div class="container">
            <h2>
                <span>8 причин,</span>
                почему нас
                выбирают и
                рекоме-
                ндуют
            </h2>
            <div class="cause-wrap">
                <div class="flex">
                    <div class="cause-block">
                        <div class="title">
                            Лучший<br> инструмент
                        </div>
                        <div class="icon-block">
                            <div class="icon objective"></div>
                        </div>
                        <div class="text">
                            Домовладелец© — современное профессиональное программное решение для предприятий ЖКХ...
                        </div>
                        <a href="#" class="link">Читать полностью</a>
                    </div>
                    <div class="cause-block green">
                        <div class="title">
                            Начать<br> легко
                        </div>
                        <div class="icon-block">
                            <div class="icon start"></div>
                        </div>
                        <div class="text text-1">
                            При установке программы Домовладелец мы перенесем Ваши данные бесплатно!
                            <br><br>
                            Для всех пользователей "Домовладельца"...
                        </div>
                        <a href="#" class="link">Читать полностью</a>
                    </div>
                </div>
                <div class="flex">
                    <div class="cause-block green">
                        <div class="title">
                            Удобство
                        </div>
                        <div class="icon-block">
                            <div class="icon mechanical"></div>
                        </div>
                        <div class="text">
                            Встроеная интеграция с ГИС ЖКХ без посредников. Все необходимые стыковки, в том числе с
                            сервисами ГИС, СБЕРБАНК, Почта России, ВТБ, Система...
                        </div>
                        <a href="#" class="link">Читать полностью</a>
                    </div>
                    <div class="cause-block">
                        <div class="title">
                            Поддержка
                        </div>
                        <div class="icon-block">
                            <div class="icon support"></div>
                        </div>
                        <div class="text">
                            Мы консультируем и обучаем, чтобы у Вас все работало.
                            <br><br>
                            Высококвалифицированные специалисты техподдержки и центра...
                        </div>
                        <a href="#" class="link">Читать полностью</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section form -->
    <section class="section-form form-x form-one" id="form-x">
        <div class="left_block">
            <div class="position-block">
                <div class="logo">
                    <img src="images/d-logo.png" alt=" ">
                </div>

                <div class="woman">
                    <img src="images/woman.png" alt=" ">
                </div>
                <div class="text-form">
                    <div class="text">
                        Помогаем быстро перейти на Домовладелец за минимальные деньги и время.
                    </div>
                    <div class="text">
                        Перейдите на <span>Домовладелец© —</span> получите внедрение, сайт с кабинетом жителя и
                        ГИС-интеграцию <span>БЕСПЛАТНО</span>!
                    </div>
                </div>
            </div>
        </div>
        <div class="form-block">
            <div class="wrap">

                <h3>
                    Онлайн заявка
                </h3>

                <p>
                    на демо-версию или бесплатную консультацию прямо сейчас!
                </p>

                <form method="post" class="send-form" autocomplete="off">

                    <input type="text" name="client_name" class="client-name" placeholder="Ваше имя и организация">

                    <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">

                    <input type="hidden" name="send_type" class="send-type" value="2">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
                    <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                    <?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn fio_button">Заказать</button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree align-left">
                        <label class="checkbox-label form-agree-check checked">
                            <input type="checkbox" checked>
                            Я даю согласие на обработку <a class="link" href="#">персональных данных</a>
                        </label>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!--===================================================== section work -->
    <section class="section-work" id="work">
        <div class="container">
            <h2>
                Как это <span>работает</span>
            </h2>
            <div class="row">
                <div class="col-1-3">
                    <div class="video-block">
                        <a href="https://www.youtube.com/watch?v=XOIfBhSmoOc&amp;autoplay=1" class="review-item link"
                           data-fancybox="review">
                            <div class="text">
                                <span>возможности программы урок 1</span>
                                <p>домовладелец©</p>
                                <div class="icon-block">
                                    <div class="icon"></div>
                                    <div class="icon-text">
                                        Видео
                                    </div>
                                </div>
                            </div>
                            <div class="img-block">
                                <img src="images/PC.png" alt=" ">
                            </div>
                        </a>
                        <div class="text-desc">
                            Видео как пользоваться программой 1
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="video-block">
                        <a href="https://www.youtube.com/watch?v=XOIfBhSmoOc&amp;autoplay=1" class="review-item link"
                           data-fancybox="review">
                            <div class="text">
                                <span>возможности программы урок 2</span>
                                <p>домовладелец©</p>
                                <div class="icon-block">
                                    <div class="icon"></div>
                                    <div class="icon-text">
                                        Видео
                                    </div>
                                </div>
                            </div>
                            <div class="img-block">
                                <img class="i-1" src="images/city-mini.png" alt=" ">
                            </div>
                        </a>
                        <div class="text-desc">
                            Видео как пользоваться программой 2
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="video-block">
                        <a href="https://www.youtube.com/watch?v=XOIfBhSmoOc&amp;autoplay=1" class="review-item link"
                           data-fancybox="review">
                            <div class="text">
                                <span>возможности программы урок 3</span>
                                <p>домовладелец©</p>
                                <div class="icon-block">
                                    <div class="icon"></div>
                                    <div class="icon-text">
                                        Видео
                                    </div>
                                </div>
                            </div>
                            <div class="img-block">
                                <img class="i-2" src="images/woman-mini.png" alt=" ">
                            </div>
                        </a>
                        <div class="text-desc">
                            Видео как пользоваться программой 3
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section cost -->
    <section class="section-cost" id="cost">
        <div class="container">
            <h2>
                Стоимость
            </h2>

            <div class="cloud-1 si-floating"></div>

            <div class="cloud-3 si-floating">
                <img src="images/cloud-3.png" alt=" ">
            </div>

            <div class="cloud-4 si-floating2">
                <img src="images/cloud-4.png" alt=" ">
            </div>

            <div class="row">
                <div class="col-1-5 col-pad">
                    <div class="cost-wrap">
                        <div class="cost-icon">
                            <div class="icon community"></div>
                        </div>
                        <div class="cost-line"></div>
                        <div class="cost-title">
                            ТСН, ТСЖ, ЖСК
                        </div>
                        <div class="cost-price">
                            <div class="text">4 900</div>
                            <div class="ruble"></div>
                        </div>
                        <div class="cost-text">
                            Установка, полная настройка, тех.поддержка (4 месяца) и мобильное приложение включены
                        </div>
                        <div class="cost-line"></div>
                        <a href="#" class="last-block">
                            <div class="buy">Купить</div>
                            <div class="arrow"></div>
                        </a>
                    </div>
                </div>
                <div class="col-1-5 col-pad">
                    <div class="cost-wrap">
                        <div class="cost-icon">
                            <div class="icon pipes"></div>
                        </div>
                        <div class="cost-line"></div>
                        <div class="cost-title i-1">
                            Ресурсоснабжающие организации
                        </div>
                        <div class="cost-price i-1">
                            <div class="text">10 980</div>
                            <div class="ruble"></div>
                        </div>
                        <div class="cost-text">
                            Установка, полная настройка, тех.поддержка (4 месяца) и мобильное приложение включены
                        </div>
                        <div class="cost-line"></div>
                        <a href="#" class="last-block">
                            <div class="buy">Купить</div>
                            <div class="arrow"></div>
                        </a>
                    </div>
                </div>
                <div class="col-1-5 col-pad">
                    <div class="cost-wrap">
                        <div class="cost-icon">
                            <div class="icon contract"></div>
                        </div>
                        <div class="cost-line"></div>
                        <div class="cost-title i-1">
                            Управляющие компании
                        </div>
                        <div class="cost-price i-1">
                            <div class="text">11 980</div>
                            <div class="ruble"></div>
                        </div>
                        <div class="cost-text">
                            Установка, полная настройка, тех.поддержка (4 месяца) и мобильное приложение включены
                        </div>
                        <div class="cost-line"></div>
                        <a href="#" class="last-block">
                            <div class="buy">Купить</div>
                            <div class="arrow"></div>
                        </a>
                    </div>
                </div>
                <div class="col-1-5 col-pad">
                    <div class="cost-wrap">
                        <div class="cost-icon">
                            <div class="icon support"></div>
                        </div>
                        <div class="cost-line"></div>
                        <div class="cost-title i-2">
                            Расчетные центры
                        </div>
                        <div class="cost-price i-1">
                            <div class="text">19 980</div>
                            <div class="ruble"></div>
                        </div>
                        <div class="cost-text">
                            Установка, полная настройка, тех.поддержка (4 месяца) и мобильное приложение включены
                        </div>
                        <div class="cost-line"></div>
                        <a href="#" class="last-block">
                            <div class="buy">Купить</div>
                            <div class="arrow"></div>
                        </a>
                    </div>
                </div>
                <div class="col-1-5 col-pad">
                    <div class="cost-wrap">
                        <div class="cost-icon">
                            <div class="icon cottage"></div>
                        </div>
                        <div class="cost-line"></div>
                        <div class="cost-title i-3">
                            Коттеджные<br> поселки
                        </div>
                        <div class="cost-price">
                            <div class="text">9 980</div>
                            <div class="ruble"></div>
                        </div>
                        <div class="cost-text">
                            Установка, полная настройка, тех.поддержка (4 месяца) и мобильное приложение включены
                        </div>
                        <div class="cost-line"></div>
                        <a href="#" class="last-block">
                            <div class="buy">Купить</div>
                            <div class="arrow"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section program -->
    <section class="section-program" id="program">

        <div class="fon-block"></div>

        <div class="container">
            <h2>
                Некоторые экраны <br> <span>программы</span>
            </h2>
            <div class="wrapper-program-slider">

                <!-- Swiper -->
                <div class="swiper-container program-slider">
                    <div class="swiper-wrapper">

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <div class="left-block">
                                <div class="transform-block">
                                    <div class="block-green">
                                        <h3>
                                            Домовладелец
                                        </h3>
                                    </div>
                                </div>
                                <div class="fio-block-buttons">
                                    <a href="#" class="btn fio_button">Справочники</a>
                                    <a href="#" class="btn fio_button">Жилищный фонд</a>
                                    <a href="#" class="btn fio_button">Управление</a>
                                </div>
                                <div class="green-block-buttons">
                                    <a href="#" class="btn green_button">Паспортный стол</a>
                                    <a href="#" class="btn green_button">Бухгалтерия</a>
                                    <a href="#" class="btn green_button">Выход</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5>
                                    Домовладелец©
                                </h5>
                                <div class="text">
                                    Cовременное профессиональное
                                    программное решение для предприятий ЖКХ.
                                </div>
                                <a href="#" class="btn border-button">
                                    Регистрация выживания
                                </a>
                                <a href="#" class="btn border-button">
                                    Регистрация гостей
                                </a>
                                <a href="#" class="btn border-button">
                                    Запросы
                                </a>
                            </div>
                            <div class="last-block">
                                <a href="#" class="btn btn-service">Сервис</a>
                                <a href="#" class="btn btn-support">Поддержка</a>
                                <a href="#" class="btn btn-change">Изменить</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="left-block">
                                <div class="transform-block">
                                    <div class="block-green">
                                        <h3>
                                            Домовладелец
                                        </h3>
                                    </div>
                                </div>
                                <div class="fio-block-buttons">
                                    <a href="#" class="btn fio_button">Справочники</a>
                                    <a href="#" class="btn fio_button">Жилищный фонд</a>
                                    <a href="#" class="btn fio_button">Управление</a>
                                </div>
                                <div class="green-block-buttons">
                                    <a href="#" class="btn green_button">Паспортный стол</a>
                                    <a href="#" class="btn green_button">Бухгалтерия</a>
                                    <a href="#" class="btn green_button">Выход</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5>
                                    Домовладелец©
                                </h5>
                                <div class="text">
                                    Cовременное профессиональное
                                    программное решение для предприятий ЖКХ.
                                </div>
                                <a href="#" class="btn border-button">
                                    Регистрация выживания
                                </a>
                                <a href="#" class="btn border-button">
                                    Регистрация гостей
                                </a>
                                <a href="#" class="btn border-button">
                                    Запросы
                                </a>
                            </div>
                            <div class="last-block">
                                <a href="#" class="btn btn-service">Сервис</a>
                                <a href="#" class="btn btn-support">Поддержка</a>
                                <a href="#" class="btn btn-change">Изменить</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="left-block">
                                <div class="transform-block">
                                    <div class="block-green">
                                        <h3>
                                            Домовладелец
                                        </h3>
                                    </div>
                                </div>
                                <div class="fio-block-buttons">
                                    <a href="#" class="btn fio_button">Справочники</a>
                                    <a href="#" class="btn fio_button">Жилищный фонд</a>
                                    <a href="#" class="btn fio_button">Управление</a>
                                </div>
                                <div class="green-block-buttons">
                                    <a href="#" class="btn green_button">Паспортный стол</a>
                                    <a href="#" class="btn green_button">Бухгалтерия</a>
                                    <a href="#" class="btn green_button">Выход</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5>
                                    Домовладелец©
                                </h5>
                                <div class="text">
                                    Cовременное профессиональное
                                    программное решение для предприятий ЖКХ.
                                </div>
                                <a href="#" class="btn border-button">
                                    Регистрация выживания
                                </a>
                                <a href="#" class="btn border-button">
                                    Регистрация гостей
                                </a>
                                <a href="#" class="btn border-button">
                                    Запросы
                                </a>
                            </div>
                            <div class="last-block">
                                <a href="#" class="btn btn-service">Сервис</a>
                                <a href="#" class="btn btn-support">Поддержка</a>
                                <a href="#" class="btn btn-change">Изменить</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="left-block">
                                <div class="transform-block">
                                    <div class="block-green">
                                        <h3>
                                            Домовладелец
                                        </h3>
                                    </div>
                                </div>
                                <div class="fio-block-buttons">
                                    <a href="#" class="btn fio_button">Справочники</a>
                                    <a href="#" class="btn fio_button">Жилищный фонд</a>
                                    <a href="#" class="btn fio_button">Управление</a>
                                </div>
                                <div class="green-block-buttons">
                                    <a href="#" class="btn green_button">Паспортный стол</a>
                                    <a href="#" class="btn green_button">Бухгалтерия</a>
                                    <a href="#" class="btn green_button">Выход</a>
                                </div>
                            </div>
                            <div class="right-block">
                                <h5>
                                    Домовладелец©
                                </h5>
                                <div class="text">
                                    Cовременное профессиональное
                                    программное решение для предприятий ЖКХ.
                                </div>
                                <a href="#" class="btn border-button">
                                    Регистрация выживания
                                </a>
                                <a href="#" class="btn border-button">
                                    Регистрация гостей
                                </a>
                                <a href="#" class="btn border-button">
                                    Запросы
                                </a>
                            </div>
                            <div class="last-block">
                                <a href="#" class="btn btn-service">Сервис</a>
                                <a href="#" class="btn btn-support">Поддержка</a>
                                <a href="#" class="btn btn-change">Изменить</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-pagination program-pagination"></div>
            </div>
        </div>
    </section>


    <!--===================================================== section app -->
    <section class="section-app" id="app">
        <div class="container">
            <h2>
                Мобильное приложение<br> <span>Домовладелец©</span>
            </h2>
            <div class="text">
                посмотреть всю информацию по начислениям и оплатам за услуги ЖКХ,
                подать показания счетчиков, <br>
                оставить заявку в диспетчерскую, <br>
                оставить заявку на КПП охраны или консьержу, <br>
                всегда быть в курсе новостей Вашего дома, <br>
                проходить опросы по улучшению обслуживания и благоустройства дома, <br>
                принимать участие в голосованиях, <br>
                принимать участие в чате с управляющей компанией <br>
                диспетчерский журнал <br>
                приложение исполнителя
            </div>
            <div class="app-block">
                <a href="#">
                    <img class="android" src="images/android.png" alt=" ">
                </a>
                <a href="#">
                    <img src="images/ios.png" alt=" ">
                </a>
            </div>
            <div class="phone-block">
                <div class="transform-block">
                    <div class="block-green">
                        <h3>
                            Домовладелец
                        </h3>
                    </div>
                </div>
                <form method="post" class="send-form app-form" autocomplete="off">
                    <input type="text" name="client_login" class="client-login" placeholder="Логин">

                    <input type="password" name="client_password" class="client-password" placeholder="Пароль">

                    <a href="#" class="pass">
                        Забыли пароль?
                    </a>
                    <input type="hidden" name="send_type" class="send-type" value="2">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
                    <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                    <?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn reg_button">Регистрация</button>
                        <button type="submit" class="btn log_button">
                            <span class="icon"></span>
                            <span>Войти</span></button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree align-left">
                        <label class="checkbox-label form-agree-check form-agree-check-1 checked">
                            <input type="checkbox" checked>
                        </label>
                        <span> Согласен на обработку персональных данных и
                                    принимаю условия <a href="#">Политики конфиденциальности</a></span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--===================================================== section x -->
    <section class="section-relations" id="relations">
        <div class="container">
            <h2>
                Выстраивание доверительных <span>отношений с жителями</span>
            </h2>
            <div class="row">
                <div class="col-1-2">
                    <img src="images/people.png" alt=" " class="relations-img">
                </div>
                <div class="col-1-2">
                    <div class="text-weight">
                        Получите дополнительные возможности от использования мобильного приложения и программы
                        «Домовладелец» для выстраивания доверительных отношений
                        с жителями комплексов.
                    </div>

                    <div class="text-normal">
                        • Приём заявок от жителей в режиме онлайн. Получайте заявки от жителей в режиме реального
                        времени, распределяйте их по работникам и контролируйте процесс исполнения.
                    </div>
                    <div class="text-normal">
                        • Отвечайте на вопросы и повышайте уровень доверия. Быстрая коммуникация с жителями позволит
                        укрепить доверие к вашей организации.
                    </div>
                    <div class="text-normal">
                        • Автоматизируйте пропускной режим во дворе. Жители комплекса смогут заказывать пропуска для
                        своих гостей в режиме онлайн. Это повысит безопасность двора и сохранит общедомовое имущество.
                    </div>
                    <div class="text-normal">
                        • Продавайте дополнительные услуги. Ваши жители смогут дозаказывать необходимые услуги у вашей
                        компании в режиме «маркетплейс».
                    </div>
                    <div class="text-normal">
                        • Повышайте прозрачность. В мобильном приложении жители увидят историю счетов, свои
                        задолженности и смогут производить оплату с минимальной банковской комиссией (всего 0.8%).
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section review -->
    <section class="section-review" id="review">
        <div class="container-fluid">
            <h2>
                Отзывы
            </h2>

            <div class="fio_block">
                <div class="title">
                    Председатель правления Шталенкова З.М.<br> От ревизионной комиссии Зайд М.А.
                </div>
                <img class="house" src="images/house.png" alt=" ">

                <div class="cube_block">
                    <img src="images/cube.png" alt=" ">
                </div>
            </div>
            <div class="text">
                <div class="icon"></div>
                <div class="trust">Нам доверяют:</div>
            </div>
            <div class="review-wrapper">

                <div class="tabs-block price-block" data-tab-block="t-price">
                    <div class="block-green">

                        <ul class="nav nav-tabs">
                            <li class="tab-link active" data-tab="t-price-1" data-tab-block="t-price">
                                ТСЖ "Новая жизнь"
                            </li>

                            <li class="tab-link" data-tab="t-price-2" data-tab-block="t-price">
                                ТСЖ "Лебедь"
                            </li>

                            <li class="tab-link" data-tab="t-price-3" data-tab-block="t-price">
                                ТСЖ "Теплосервис"
                            </li>

                            <li class="tab-link" data-tab="t-price-4" data-tab-block="t-price">
                                ТСЖ "Ритуал"
                            </li>

                            <li class="tab-link" data-tab="t-price-5" data-tab-block="t-price">
                                ТСЖ "Задонский проезд, 22"
                            </li>

                            <li class="tab-link" data-tab="t-price-6" data-tab-block="t-price">
                                ТСЖ "Попутчик"
                            </li>

                            <li class="tab-link" data-tab="t-price-7" data-tab-block="t-price">
                                ТСЖ "Союз-8"
                            </li>
                        </ul>
                    </div>

                    <div class="tabs-content-container">

                        <!-- ================================================ price tab 1-->
                        <div class="tab-content active" data-tab="t-price-1" data-tab-block="t-price">
                            <div class="wrapper-review1-slider">

                                <!-- Swiper -->
                                <div class="swiper-container review1-slider">
                                    <div class="swiper-wrapper">
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Новая жизнь"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Новая жизнь"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Новая жизнь"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination review1-pagination"></div>
                            </div>
                        </div>

                        <!-- ================================================ price tab 2-->
                        <div class="tab-content" data-tab="t-price-2" data-tab-block="t-price">
                            <div class="wrapper-review2-slider">

                                <!-- Swiper -->
                                <div class="swiper-container review2-slider">
                                    <div class="swiper-wrapper">
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Лебедь"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Лебедь"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Лебедь"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination review2-pagination"></div>
                            </div>
                        </div>

                        <!-- ================================================ price tab 3-->
                        <div class="tab-content" data-tab="t-price-3" data-tab-block="t-price">
                            <div class="wrapper-review3-slider">

                                <!-- Swiper -->
                                <div class="swiper-container review3-slider">
                                    <div class="swiper-wrapper">
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Теплосервис"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Теплосервис"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Теплосервис"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination review3-pagination"></div>
                            </div>
                        </div>

                        <!-- ================================================ price tab 4-->
                        <div class="tab-content" data-tab="t-price-4" data-tab-block="t-price">
                            <div class="wrapper-review4-slider">

                                <!-- Swiper -->
                                <div class="swiper-container review4-slider">
                                    <div class="swiper-wrapper">
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Ритуал"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Ритуал"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Ритуал"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination review4-pagination"></div>
                            </div>
                        </div>

                        <!-- ================================================ price tab 5-->
                        <div class="tab-content" data-tab="t-price-5" data-tab-block="t-price">
                            <div class="wrapper-review5-slider">

                                <!-- Swiper -->
                                <div class="swiper-container review5-slider">
                                    <div class="swiper-wrapper">
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Задонский проезд, 22"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Задонский проезд, 22"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Задонский проезд, 22"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination review5-pagination"></div>
                            </div>
                        </div>

                        <!-- ================================================ price tab 6-->
                        <div class="tab-content" data-tab="t-price-6" data-tab-block="t-price">
                            <div class="wrapper-review6-slider">

                                <!-- Swiper -->
                                <div class="swiper-container review6-slider">
                                    <div class="swiper-wrapper">
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Попутчик"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Попутчик"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Попутчик"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination review6-pagination"></div>
                            </div>
                        </div>

                        <!-- ================================================ price tab 7-->
                        <div class="tab-content" data-tab="t-price-7" data-tab-block="t-price">
                            <div class="wrapper-review7-slider">

                                <!-- Swiper -->
                                <div class="swiper-container review7-slider">
                                    <div class="swiper-wrapper">
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Союз-8"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Союз-8"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                        <!-- single slide -->
                                        <div class="swiper-slide">
                                            <div class="slide-block">
                                                <div class="slide-title">
                                                    ТСЖ "Союз-8"
                                                </div>
                                                <div class="icon-slide">“</div>
                                                <div class="slide-text">
                                                    Сначала мы работали на программе по квартплате, которую нам
                                                    нахваливали и установили полный комплект вместе с программой общего
                                                    бухучета. Однако от квартплатного блока пришлось отказаться, из-за
                                                    того, что для получения правильных квитанций приходилось по каждой
                                                    квартире перепроверять и пересчитывать льготы и начисления вручную.
                                                    И ведь после каждого начисления надо вспомнить, что где не работает!
                                                    Поэтому, в марте 2013 года на собрании было решено купить
                                                    специальную программу по квартплате «Домовладелец». Что понравилось:
                                                    данные перенесли бесплатно, ручной ввод оплат не требуется,
                                                    специально засекали ...
                                                </div>
                                                <a href="#" class="btn fio_button">Читать полностью</a>
                                                <a href="#" class="letter">Благодарственное письмо</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination review7-pagination"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section questions -->
    <section class="section-questions" id="questions">
        <div class="container">
            <div class="row">
                <h2>
                    Частые <span>вопросы</span>
                </h2>
                <div class="col-1-3">
                    <img src="images/box.jpg" alt=" " class="box">
                </div>
                <div class="col-2-3">
                    <div class="questions-block">

                        <!-- ========================= single partners -->
                        <div class="question-item">
                            <div class="question">
                                <div class="question-arrow-holder">
                                    <div class="number">01</div>
                                </div>

                                <div class="question-text">
                                    После приобретения программы –
                                    сколько будет стоить полная настройка
                                    «под наши требования»? Какие существуют
                                    доплаты после покупки программы?
                                </div>
                                <div class="figure">
                                    <div class="plus">+</div>
                                    <div class="minus">-</div>
                                </div>
                            </div>

                            <div class="answer">
                                <p>
                                    Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                    установку Настройка программы (региональные особенности, индивидуализированные формы
                                    платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в установку
                                    программы без доплаты.
                                </p>
                            </div>

                        </div>

                        <!-- ========================= single partners -->
                        <div class="question-item">
                            <div class="question">
                                <div class="question-arrow-holder">
                                    <div class="number">02</div>
                                </div>
                                <div class="question-text">
                                    У нас ТСЖ 48 квартир. 4900 рублей –
                                    это разовый платеж или каждый месяц?
                                </div>
                                <div class="figure">
                                    <div class="plus">+</div>
                                    <div class="minus">-</div>
                                </div>
                            </div>

                            <div class="answer">
                                <p>
                                    Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                    установку Настройка программы (региональные особенности, индивидуализированные формы
                                    платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в установку
                                    программы без доплаты.
                                </p>
                            </div>

                        </div>

                        <!-- ========================= single partners -->
                        <div class="question-item">
                            <div class="question">
                                <div class="question-arrow-holder">
                                    <div class="number">03</div>
                                </div>
                                <div class="question-text">
                                    Нам необходимо установить программу еще
                                    на несколько компьютеров и обучить еще
                                    сотрудников работе с программой.
                                </div>
                                <div class="figure">
                                    <div class="plus">+</div>
                                    <div class="minus">-</div>
                                </div>
                            </div>

                            <div class="answer">
                                <p>
                                    Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                    установку Настройка программы (региональные особенности, индивидуализированные формы
                                    платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в установку
                                    программы без доплаты.
                                </p>
                            </div>
                        </div>

                        <!-- ========================= single partners -->
                        <div class="question-item">
                            <div class="question">
                                <div class="question-arrow-holder">
                                    <div class="number">04</div>
                                </div>
                                <div class="question-text">
                                    Программ много – в чем будет выигрыш
                                    для наших сотрудников от использования
                                    Домовладельца?
                                </div>
                                <div class="figure">
                                    <div class="plus">+</div>
                                    <div class="minus">-</div>
                                </div>
                            </div>

                            <div class="answer">
                                <p>
                                    Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                    установку Настройка программы (региональные особенности, индивидуализированные формы
                                    платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в установку
                                    программы без доплаты.
                                </p>
                            </div>
                        </div>

                        <!-- ========================= single partners -->
                        <div class="question-item">
                            <div class="question">
                                <div class="question-arrow-holder">
                                    <div class="number">05</div>
                                </div>
                                <div class="question-text">
                                    Как происходит работа с ГИС ЖКХ?
                                </div>
                                <div class="figure">
                                    <div class="plus">+</div>
                                    <div class="minus">-</div>
                                </div>
                            </div>

                            <div class="answer">
                                <p>
                                    Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                    установку Настройка программы (региональные особенности, индивидуализированные формы
                                    платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в установку
                                    программы без доплаты.
                                </p>
                            </div>
                        </div>

                        <!-- ========================= single partners -->
                        <div class="question-item">
                            <div class="question">
                                <div class="question-arrow-holder">
                                    <div class="number">06</div>
                                </div>
                                <div class="question-text">
                                    У нас уже есть свой сайт. Возможно ли
                                    установить Личный кабинет жителя
                                    на нашем сайте?
                                </div>
                                <div class="figure">
                                    <div class="plus">+</div>
                                    <div class="minus">-</div>
                                </div>
                            </div>

                            <div class="answer">
                                <p>
                                    Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                    установку Настройка программы (региональные особенности, индивидуализированные формы
                                    платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в установку
                                    программы без доплаты.
                                </p>
                            </div>
                        </div>

                    </div>

                    <p class="btn more-button">
                        Смотреть все вопросы
                    </p>

                    <div class="more-block">
                        <div class="questions-block">

                            <!-- ========================= single partners -->
                            <div class="question-item">
                                <div class="question">
                                    <div class="question-arrow-holder">
                                        <div class="number">07</div>
                                    </div>
                                    <div class="question-text">
                                        Программ много – в чем будет выигрыш
                                        для наших сотрудников от использования
                                        Домовладельца?
                                    </div>
                                    <div class="figure">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                </div>

                                <div class="answer">
                                    <p>
                                        Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                        установку Настройка программы (региональные особенности, индивидуализированные
                                        формы платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в
                                        установку программы без доплаты.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="question-item">
                                <div class="question">
                                    <div class="question-arrow-holder">
                                        <div class="number">08</div>
                                    </div>
                                    <div class="question-text">
                                        Как происходит работа с ГИС ЖКХ?
                                    </div>
                                    <div class="figure">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                </div>

                                <div class="answer">
                                    <p>
                                        Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                        установку Настройка программы (региональные особенности, индивидуализированные
                                        формы платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в
                                        установку программы без доплаты.
                                    </p>
                                </div>
                            </div>

                            <!-- ========================= single partners -->
                            <div class="question-item">
                                <div class="question">
                                    <div class="question-arrow-holder">
                                        <div class="number">09</div>
                                    </div>
                                    <div class="question-text">
                                        У нас уже есть свой сайт. Возможно ли
                                        установить Личный кабинет жителя
                                        на нашем сайте?
                                    </div>
                                    <div class="figure">
                                        <div class="plus">+</div>
                                        <div class="minus">-</div>
                                    </div>
                                </div>

                                <div class="answer">
                                    <p>
                                        Никаких доплат после покупки нет. Все настройки, обучение, консультации входят в
                                        установку Настройка программы (региональные особенности, индивидуализированные
                                        формы платежного документа, отчеты в соцзащиту, отчёты поставщиков) -входят в
                                        установку программы без доплаты.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section form two -->
    <section class="section-form form-x form-two form-x1" id="form-x">
        <div class="left_block">
            <div class="position-block">
                <div class="logo">
                    <img src="images/d-logo.png" alt=" ">
                </div>

                <div class="woman">
                    <img src="images/woman-form.png" alt=" ">
                </div>
            </div>
        </div>
        <div class="form-block">
            <div class="wrap">

                <h3>
                    Остались вопросы?
                </h3>

                <p>
                    Оставьте заявку, и наш менеджер расскажет Вам обо всех особенностях программы.
                </p>

                <form method="post" class="send-form" autocomplete="off">

                    <input type="text" name="client_name" class="client-name" placeholder="Ваше имя и организация">

                    <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">

                    <input type="hidden" name="send_type" class="send-type" value="2">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
                    <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                    <?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn fio_button">Заказать</button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree align-left">
                        <label class="checkbox-label form-agree-check checked">
                            <input type="checkbox" checked>
                            Я даю согласие на обработку <a class="link" href="#">персональных данных</a>
                        </label>
                    </div>
                </form>
            </div>

        </div>
    </section>


    <!--===================================================== Footer -->
    <footer class="layout-footer">
        <div class="container flex-block">
            <div class="left_block">
                <div class="text">
                    Свидетельства об официальной регистрации программы для ЭВМ №990061 от 15.02.1999, 2005613112 от
                    29.11.2005, РД0151146 от 08.07.2014, свидетельство на товарный знак №207723 от 26.04.2000 выданы
                    Роспатент. Аккредитация Минкомсвязи России №3737 от 30.04.2014
                </div>
                <a href="#" class="btn border_button">Установить демо-версию</a>
            </div>
            <div class="center_block">
                ООО "ИФ Легпромсофт"<br>
                Адрес: г.Москва, ул.Ботаническая 14
                Домовладелец©.<br>
                Все права защищены.
            </div>
            <div class="si-phone">
                <a href="tel:+74957679094" class="phone-link">+7 (495) 767-90-94</a>
                <a href="mailto:dmvl@lps.ru" class="mail">dmvl@lps.ru</a>

                <div class="app-block">
                    <a href="#">
                        <img src="images/Google-Play-Button.png" alt=" ">
                    </a>
                    <a href="#">
                        <img src="images/App-Store-Button.png" alt=" ">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!--===================================================== section-last -->
    <section class="section-last" id="last">
        <div class="container">
            <div class="row">
                <div class="col-1-3">
                    <a href="#" class="link">Разработано в "Hello Brand!"</a>
                </div>
                <div class="col-1-3">
                    <div class="text">
                        © 2005 – 2020 ООО ИФ «Легпромсофт»
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="empty-block"></div>
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== Modals -->
    <!-- Overlay(s) -->
    <div class="si-overlay"></div>
    <div class="si-overlay-2"></div>

    <div class="global-nav">
        <div class="pseudo-table">
            <div class="pseudo-table-cell nav-overlay">
                <ul class="nav" id="global-menu">
                    <li><a class="si-jump global-nav-link" href="#function">Функционал</a></li>
                    <li><a class="si-jump global-nav-link" href="#cause">Почему мы</a></li>
                    <li><a class="si-jump global-nav-link" href="#work">Видео</a></li>
                    <li><a class="si-jump global-nav-link" href="#cost">Стоимость</a></li>
                    <li><a class="si-jump global-nav-link" href="#program">Программы</a></li>
                    <li><a class="si-jump global-nav-link" href="#review">Отзывы</a></li>
                    <li><a class="si-jump global-nav-link" href="#questions">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Wrappers -->
    <div class="si-modals-wrapper-2"></div>

    <div class="si-modals-wrapper">

        <!--============================================== success modal -->
        <div class="si-success-modal si-success-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container align-center">

                <div class="si-success-modal-title">
                    Спасибо!
                </div>

                <div class="success-time">
                    Ваша заявка отправлена
                </div>

                <div class="line"></div>

                <p>
                    Наш менеджер свяжется с Вами в ближайшее время.
                </p>

            </div>
        </div>

        <!--============================================== phone modal -->
        <div class="si-modal  phone-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container align-center">

                <div class="modal-form-title">
                    Онлайн заявка
                </div>

                <div class="modal-time">
                    на демо-версию или бесплатную консультацию прямо сейчас!
                </div>

                <form method="post" class="send-form form-block" autocomplete="off">

                    <input type="text" name="client_name" class="client-name" placeholder="Ваше имя и организация*">

                    <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон*">


                    <input type="hidden" name="send_type" class="send-type" value="1">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
                    <input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
                    <?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn fio_button">Заказать</button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree align-left">
                        <label class="checkbox-label form-agree-check checked">
                            <input type="checkbox" checked>
                            Я даю согласие на обработку <a class="link" href="#">персональных данных</a>
                        </label>
                    </div>
                </form>

            </div>
        </div>

        <!--============================================== text modal 1 -->
        <div class="si-modal text-modal text-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <div class="modal-form-title align-center">
                    Согласие на обработку персональных данных
                </div>

                <div class="modal-text-block">
                    <p>
                        Настоящим в&nbsp;соответствии с&nbsp;Федеральным законом №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;27.07.2006 года свободно, своей волей и&nbsp;в&nbsp;своём
                        интересе выражаю своё безусловное согласие на&nbsp;обработку моих персональных данных
                        НАЗВАНИЕ КОМПАНИИ,
                        зарегистрированным в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ по&nbsp;адресу:
                        АДРЕС КОМПАНИИ
                        (далее по&nbsp;тексту&nbsp;- Оператор).
                    </p>

                    <p>
                        Персональные данные&nbsp;- любая информация, относящаяся к&nbsp;определённому
                        или&nbsp;определяемому на&nbsp;основании такой информации физическому лицу.
                    </p>

                    <p>
                        Настоящее Согласие выдано мною на&nbsp;обработку следующих персональных данных:
                    </p>

                    <ul class="marked">
                        <li>
                            Имя;
                        </li>
                        <li>
                            Телефон;
                        </li>
                        <li>
                            E-mail;
                        </li>
                        <li>
                            Комментарий.
                        </li>
                    </ul>

                    <p>
                        Согласие дано Оператору для&nbsp;совершения следующих действий с&nbsp;моими персональными
                        данными с&nbsp;использованием средств автоматизации и/или&nbsp;без&nbsp;использования таких
                        средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение),
                        использование, обезличивание, передача третьим лицам для&nbsp;указанных ниже целей,
                        а&nbsp;также осуществление любых иных действий, предусмотренных действующим
                        законодательством&nbsp;РФ, как&nbsp;неавтоматизированными, так&nbsp;и&nbsp;автоматизированными
                        способами.
                    </p>

                    <p>
                        Данное согласие даётся Оператору и&nbsp;третьему лицу(&#8209;ам)
                        ТРЕТЬИ ЛИЦА
                        для&nbsp;обработки моих персональных данных в&nbsp;следующих целях:
                    </p>

                    <ul class="marked">
                        <li>
                            предоставление мне услуг/работ;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес уведомлений, касающихся предоставляемых услуг/работ;
                        </li>
                        <li>
                            подготовка и&nbsp;направление ответов/коммерческих предложений на&nbsp;мои запросы;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес информации, в&nbsp;том числе рекламной,
                            о&nbsp;мероприятиях/товарах/услугах/работах Оператора.
                        </li>
                    </ul>

                    <p>
                        Настоящее согласие действует до&nbsp;момента его&nbsp;отзыва путём направления соответствующего
                        уведомления на&nbsp;электронный адрес
                        <a href="mailto:">ЕМЕЙЛ</a>.
                        В&nbsp;случае отзыва мною согласия на&nbsp;обработку персональных данных Оператор вправе
                        продолжить обработку персональных данных без&nbsp;моего согласия при&nbsp;наличии оснований,
                        указанных в&nbsp;пунктах 2&#8209;11 части&nbsp;1 статьи&nbsp;6, части&nbsp;2 статьи&nbsp;10
                        и&nbsp;части&nbsp;2 статьи&nbsp;11 Федерального закона №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;26.06.2006&nbsp;г.
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

<script>
    var template_url = '<?php echo SI_RootURL(); ?>';
    //    var template_url = '<?php //echo SI_CurrentPageURL(); ?>//';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.4.min.js"></script>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

<!-- Google Recaptcha -->
<!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
<!--<script type="text/javascript">-->
<!--    var recaptcha1,-->
<!--        recaptcha2,-->
<!--        recaptcha3;-->
<!--    var onloadCallback = function () {-->
<!--        recaptcha = grecaptcha.render('g-recaptcha', {-->
<!--            'sitekey': ''-->
<!--        });-->
<!--    };-->
<!--</script>-->

<!-- custom scripts -->
<script src="js/main.js"></script>
<script src="js/share.js"></script>

<?php include('si-engine.php'); ?>

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0

-->


</body>
</html>