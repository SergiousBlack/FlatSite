<?php

 
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use \yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
 

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
<div class="wrapper">
 
        <div class="nav_div">
            <nav>
 
                <div class="main_menu_bg_div">
                    <a href="<?=Url::to("reserver-and-paid")?>"><div class="main_menu_el main_menu_r_border m_m_el_1 <?= Yii::$app->requestedAction->id == 'index' ? 'main_menu_el_active' : ''  ?>">Бронирование и оплата</div></a>
                    <a href="<?=Url::to("questions-and-answers")?>"><div class="main_menu_el main_menu_r_border m_m_el_2 @ViewBag.Active2">Вопросы и ответы</div></a>
                    <a href="<?=Url::to("reviews")?>"><div class="main_menu_el main_menu_r_border m_m_el_3 @ViewBag.Active3">Отзывы гостей</div></a>
                    <a href="<?=Url::to("cooperation")?>"><div class="main_menu_el main_menu_r_border m_m_el_4 @ViewBag.Active4">Сотрудничество</div></a>
                    <a href="<?=Url::to("partners")?>"><div class="main_menu_el main_menu_r_border m_m_el_5 @ViewBag.Active5">Партнеры</div></a>
                    <a href="<?=Url::to("contacts")?>"><div class="main_menu_el m_m_el_6 @ViewBag.Active6">Контакты</div></a>
                
                </div>
            </nav>
        </div>
    
          <div class="header_div">
            <header>
                <div class="header_logo">
                    <div class="header_logo_bl hlb_left">
                        <a href="<?= Url::to('site')?>">
                            <img src="<?= \Yii::getAlias('@web').'/images/logo_red.png' ?>" />
                        </a>
                    </div>
                    <div class="header_logo_bl hlb_center">
                        <div style="border: 0px solid #fff; height: 20px;">
                            <a href="" style="margin-right: 0px;">
                                Красногорск
                            </a>
                            <a href="">
                                Москва
                            </a>
                        </div>
                        <div style="border: 0px solid #fff; height: 20px; margin-top: 3px; display: none;">
                            <a href="">
                                одна спальня
                            </a>
                            <a href="">
                                две спальни
                            </a>
                            <a href="">
                                три спальни
                            </a>
                        </div>
                    </div>
                    <div class="header_logo_bl hlb">
                        <img src="images/time_red.jpg" style="float: left; margin-right: 10px; " />
                        <p class="header_tel">(495) 565 36 66</p>
                        <a href="#" class="header_email">info@sutkihouse.ru</a>
                    </div>
                </div>
                <!-- -->
                <div class="div4" style="z-indez:99999!important; width: 1000px;">
                    <div style="position: relative; top: -10px; display: block;" id="gallery">
                        <div style="left: 180.5px; width: 625px; height: 345px; top: 20px; opacity: 1; z-index: 4;" class="carousel-feature carousel_big_img">
                            <a href="@Url.Action("Flat","Home")">
                                <img style="width: 625px; height: 345px;" class="carousel-image" alt="" src="images/0_77633600_1351448634_img.jpg" href="#">
                            </a>

                            <div style="display: block; opacity: 0.99;" class="carousel-caption">

                                <div class="info_price" style="z-index:999;">
                                    <span>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="80%">
                                                        <span class="price_1">3000</span>
                                                    </td>
                                                    <td class="currency_2">
                                                        рублей<br>в сутки
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </span>
                                    <!--<div class="allprices">
                                        <div class="allprices_title">
                                            Стоимость проживания:
                                        </div>
                                        <div class="allprices_prices">
                                            <p class="allprices_list">3000 р/сут<span class="allprices_list_black"> - стандартная стоимость</span></p>
                                            <p class="allprices_list">2500 р/сут<span class="allprices_list_black"> - от 7 суток</span></p>
                                            <p class="allprices_list">2000 р/сут<span class="allprices_list_black"> - от 30 суток</span></p>
                                            <p class="allprices_list">2000 р/ночь<span class="allprices_list_black"> - с 21.00 до 9.00</span></p>
                                            <p class="allprices_list">1500 р/3часа<span class="allprices_list_black"> - время любое</span></p>
                                            <p class="allprices_list">500 р/час<span class="allprices_list_black"> - каждый последующий</span></p>
                                        </div>
                                    </div>-->
                                </div>



                                <div>
                                    <div class="id_pimpa" style="" align="left">
                                        <!--<b class="id_p" style="margin-top: 20px !important;"></b>-->
                                        ID: 01
                                    </div>
                                    <div class="tbl">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <b class="punkt">Красногорск1</b> | <b class="name">Двухкомнатные аппартаменты</b>
                                                    </td>
                                                </tr>
                                                <tr height="20">
                                                    <td class="adres_info">Адрес здесь</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>

                        <div style="left: 474px; width: 512px; height: 286px; top: 50px; opacity: 0.4; z-index: 1;" class="carousel-feature carousel_small_img">
                            <a href="@Url.Action("Flat","Home")"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="images/0_12312700_1418251437_img.jpg" href="#"></a>
                            <div style="display: none;" class="carousel-caption">
                                <p style="padding:0; margin:0;"></p>
                                <div class="info_price" style="z-index:999;">
                                    <span>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="80%">
                                                        <span class="price_1">3000</span>
                                                    </td>
                                                    <td class="currency_2">
                                                        рублей<br>в сутки
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </span>
                                    <!--<div class="allprices">
                                        <div class="allprices_title">
                                            Стоимость проживания:
                                        </div>
                                        <div class="allprices_prices">
                                            <p class="allprices_list">3000 р/сут<span class="allprices_list_black"> - стандартная стоимость</span></p>
                                            <p class="allprices_list">2500 р/сут<span class="allprices_list_black"> - от 7 суток</span></p>
                                            <p class="allprices_list">2000 р/сут<span class="allprices_list_black"> - от 30 суток</span></p>
                                            <p class="allprices_list">2000 р/ночь<span class="allprices_list_black"> - с 21.00 до 9.00</span></p>
                                            <p class="allprices_list">1500 р/3часа<span class="allprices_list_black"> - время любое</span></p>
                                            <p class="allprices_list">500 р/час<span class="allprices_list_black"> - каждый последующий</span></p>
                                        </div>
                                    </div>-->
                                </div>

                                <div>
                                    <p class="id_pimpa" style="" align="left">
                                        <b class="id_p" style="margin-top: 20px !important;">ID: 01</b>
                                    </p>
                                    <div class="tbl">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <b class="punkt">Красногорск2</b> | <b class="name">Апартаменты с одной спальней</b>
                                                    </td>
                                                </tr>
                                                <tr height="20">
                                                    <td class="adres_info">Адрес здесь</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>


                        <div style="left: 474px; width: 512px; height: 286px; top: 50px; opacity: 0.4; z-index: 1;" class="carousel-feature carousel_small_img">
                            <a href="@Url.Action("Flat","Home")"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="images/0_12312700_1418251437_img.jpg" href="#"></a>
                            <div style="display: none;" class="carousel-caption">
                                <p style="padding:0; margin:0;"></p>
                                <div class="info_price" style="z-index:999;">
                                    <span>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="80%">
                                                        <span class="price_1">3000</span>
                                                    </td>
                                                    <td class="currency_2">
                                                        рублей<br>в сутки
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </span>
                                    <!--<div class="allprices">
                                        <div class="allprices_title">
                                            Стоимость проживания:
                                        </div>
                                        <div class="allprices_prices">
                                            <p class="allprices_list">3000 р/сут<span class="allprices_list_black"> - стандартная стоимость</span></p>
                                            <p class="allprices_list">2500 р/сут<span class="allprices_list_black"> - от 7 суток</span></p>
                                            <p class="allprices_list">2000 р/сут<span class="allprices_list_black"> - от 30 суток</span></p>
                                            <p class="allprices_list">2000 р/ночь<span class="allprices_list_black"> - с 21.00 до 9.00</span></p>
                                            <p class="allprices_list">1500 р/3часа<span class="allprices_list_black"> - время любое</span></p>
                                            <p class="allprices_list">500 р/час<span class="allprices_list_black"> - каждый последующий</span></p>
                                        </div>
                                    </div>-->
                                </div>

                                <div>
                                    <p class="id_pimpa" style="" align="left">
                                        <b class="id_p" style="margin-top: 20px !important;">ID: 01</b>
                                    </p>
                                    <div class="tbl">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <b class="punkt">Красногорск3</b> | <b class="name">Апартаменты с одной спальней</b>
                                                    </td>
                                                </tr>
                                                <tr height="20">
                                                    <td class="adres_info">Адрес здесь</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>

                        <div style="left: 237px; width: 512px; height: 286px; top: 50px; opacity: 0; z-index: 1;" class="carousel-feature carousel_small_img">
                            <a href="@Url.Action("Flat","Home")"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="images/0_84337400_1418026627_img.jpg" href="#"></a>
                            <div style="display: none;" class="carousel-caption">
                                <p style="padding:0; margin:0;"></p>
                                <div class="info_price" style="z-index:999;">
                                    <span>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="80%">
                                                        <span class="price_1">3000</span>
                                                    </td>
                                                    <td class="currency_2">
                                                        рублей<br>в сутки
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </span>
                                    <!--<div class="allprices">
                                        <div class="allprices_title">
                                            Стоимость проживания:
                                        </div>
                                        <div class="allprices_prices">
                                            <p class="allprices_list">3000 р/сут<span class="allprices_list_black"> - стандартная стоимость</span></p>
                                            <p class="allprices_list">2500 р/сут<span class="allprices_list_black"> - от 7 суток</span></p>
                                            <p class="allprices_list">2000 р/сут<span class="allprices_list_black"> - от 30 суток</span></p>
                                            <p class="allprices_list">2000 р/ночь<span class="allprices_list_black"> - с 21.00 до 9.00</span></p>
                                            <p class="allprices_list">1500 р/3часа<span class="allprices_list_black"> - время любое</span></p>
                                            <p class="allprices_list">500 р/час<span class="allprices_list_black"> - каждый последующий</span></p>
                                        </div>
                                    </div>-->
                                </div>

                                <div>
                                    <p class="id_pimpa" style="" align="left">
                                        <b class="id_p" style="margin-top: 20px !important;">ID: 01</b>
                                    </p>
                                    <div class="tbl">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <b class="punkt">Красногорск4</b> | <b class="name">Апартаменты с одной спальней</b>
                                                    </td>
                                                </tr>
                                                <tr height="20">
                                                    <td class="adres_info">Адрес здесь</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                                <p></p>
                            </div>
                        </div>

                        <div style="left: 0px; width: 512px; height: 286px; top: 50px; opacity: 0.4; z-index: 1;" class="carousel-feature carousel_small_img">
                            <a href="@Url.Action("Flat","Home")"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="images/0_52061000_1418467060_img.jpg" href="#"></a>
                            <div style="display: none;" class="carousel-caption">
                                <p style="padding:0; margin:0;"></p>
                                <div class="info_price" style="z-index:999;">
                                    <span>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="80%">
                                                        <span class="price_1">3000</span>
                                                    </td>
                                                    <td class="currency_2">
                                                        рублей<br>в сутки
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </span>
                                    <!--<div class="allprices">
                                        <div class="allprices_title">
                                            Стоимость проживания:
                                        </div>
                                        <div class="allprices_prices">
                                            <p class="allprices_list">3000 р/сут<span class="allprices_list_black"> - стандартная стоимость</span></p>
                                            <p class="allprices_list">2500 р/сут<span class="allprices_list_black"> - от 7 суток</span></p>
                                            <p class="allprices_list">2000 р/сут<span class="allprices_list_black"> - от 30 суток</span></p>
                                            <p class="allprices_list">2000 р/ночь<span class="allprices_list_black"> - с 21.00 до 9.00</span></p>
                                            <p class="allprices_list">1500 р/3часа<span class="allprices_list_black"> - время любое</span></p>
                                            <p class="allprices_list">500 р/час<span class="allprices_list_black"> - каждый последующий</span></p>
                                        </div>
                                    </div>-->
                                </div>

                                <div>
                                    <p class="id_pimpa" style="" align="left">
                                        <b class="id_p" style="margin-top: 20px !important;">ID: 01</b>
                                    </p>
                                    <div class="tbl">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <b class="punkt">Красногорск5</b> | <b class="name">Апартаменты с одной спальней</b>
                                                    </td>
                                                </tr>
                                                <tr height="20">
                                                    <td class="adres_info">Адрес здесь</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>
                        <div style="left: 0px; width: 512px; height: 286px; top: 50px; opacity: 0.4; z-index: 1;" class="carousel-feature carousel_small_img">
                            <a href="@Url.Action("Flat","Home")"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="images/0_52061000_1418467060_img.jpg" href="#"></a>
                            <div style="display: none;" class="carousel-caption">
                                <p style="padding:0; margin:0;"></p>
                                <div class="info_price" style="z-index:999;">
                                    <span>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td width="80%">
                                                        <span class="price_1">3000</span>
                                                    </td>
                                                    <td class="currency_2">
                                                        рублей<br>в сутки
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </span>
                                    <!--<div class="allprices">
                                        <div class="allprices_title">
                                            Стоимость проживания:
                                        </div>
                                        <div class="allprices_prices">
                                            <p class="allprices_list">3000 р/сут<span class="allprices_list_black"> - стандартная стоимость</span></p>
                                            <p class="allprices_list">2500 р/сут<span class="allprices_list_black"> - от 7 суток</span></p>
                                            <p class="allprices_list">2000 р/сут<span class="allprices_list_black"> - от 30 суток</span></p>
                                            <p class="allprices_list">2000 р/ночь<span class="allprices_list_black"> - с 21.00 до 9.00</span></p>
                                            <p class="allprices_list">1500 р/3часа<span class="allprices_list_black"> - время любое</span></p>
                                            <p class="allprices_list">500 р/час<span class="allprices_list_black"> - каждый последующий</span></p>
                                        </div>
                                    </div>-->
                                </div>

                                <div>
                                    <p class="id_pimpa" style="" align="left">
                                        <b class="id_p" style="margin-top: 20px !important;">ID: 01</b>
                                    </p>
                                    <div class="tbl">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <b class="punkt">Красногорск6</b> | <b class="name">Апартаменты с одной спальней</b>
                                                    </td>
                                                </tr>
                                                <tr height="20">
                                                    <td class="adres_info">Адрес здесь</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->
            </header>
        </div>
        <div class="article_div">
        <?= $content ?>
        </div>
        <div class="footer-push"></div>
    </div>
        <div class="footer">
            <footer>
                <center>
                    <div class="footer_el">
                        <p class="footer_el_p">
                            © 2014 SutkiHouse
                        </p>
                    </div>
                    <div class="footer_el">
                        <form action="/ru/search.htm" method="POST">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td>
                                        <input type="text" class="inp_1000" name="flat_id" value="Поиск по id" onfocus="this.value='';">
                                    </td>
                                    <td style="padding-left: 10px;">
                                        <img id="submit_search" src="images/lupa-24x24.png" alt="Найти">
                                </tr>
                            </table>
                        </form>

                    </div>
                    <div class="footer_el fe_r">
                        <p class="footer_el_p">
                            Картинки соц. сетей
                        </p>
                    </div>
                </center>
            </footer>
        </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
