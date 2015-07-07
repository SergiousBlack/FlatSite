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
        <div class="nav_div white_bg">
            <nav class="white_bg"> 
                <div class="main_menu_bg_div">
                    <a href="<?=Url::to("reserver")?>"><div class="main_menu_el main_menu_r_border m_m_el_1 <?= Yii::$app->controller->id == 'reserver' ? 'main_menu_el_active' : ''  ?>">Бронирование и оплата</div></a>
                    <a href="<?=Url::to("questionsandanswers")?>"><div class="main_menu_el main_menu_r_border m_m_el_2 <?= Yii::$app->controller->id == 'questionsandanswers' ? 'main_menu_el_active' : ''  ?>">Вопросы и ответы</div></a>
                    <a href="<?=Url::to("reviews")?>"><div class="main_menu_el main_menu_r_border m_m_el_3 <?= Yii::$app->controller->id == 'reviews' ? 'main_menu_el_active' : ''  ?>">Отзывы гостей</div></a>
                    <a href="<?=Url::to("cooperation")?>"><div class="main_menu_el main_menu_r_border m_m_el_4 <?= Yii::$app->controller->id == 'cooperation' ? 'main_menu_el_active' : ''  ?>">Сотрудничество</div></a>
                    <a href="<?=Url::to("partners")?>"><div class="main_menu_el main_menu_r_border m_m_el_5 <?= Yii::$app->controller->id == 'partners' ? 'main_menu_el_active' : ''  ?>">Партнеры</div></a>
                    <a href="<?=Url::to("contacts")?>"><div class="main_menu_el m_m_el_6 <?= Yii::$app->controller->id == 'contacts' ? 'main_menu_el_active' : ''  ?>">Контакты</div></a>
                </div>
            </nav>
        </div>
     
        <div class="header_div white_bg">
            <header class="white_bg white_header">
                <div class="header_logo">
                    <div class="header_logo_bl hlb_left">
                        <a href="<?=Url::to("site")?>">
                            <img src="images/logo_white.jpg" />
                        </a>
                    </div>
                    <div class="header_logo_bl hlb_center">
                        <div style="border: 0px solid #fff; height: 20px;">
                            <a href="" class="city_active" style="margin-right: 0px;">
                                Красногорск
                            </a>
                            <a href="" class="red_text">
                                Москва
                            </a>
                        </div>
                        <div style="border: 0px solid #fff; height: 20px; margin-top: 12px;">
                            <a href="" class="red_text" style="margin-right: 0px;">
                                одна спальня
                            </a>
                            <span class="red_text" style="margin-right: 6px; margin-left: 6px;">&#8226;</span>                            
                            <a href="" class="city_active" style="margin-right: 0px;">
                                две спальни
                            </a>
                            <span class="red_text" style="margin-right: 6px; margin-left: 6px;">&#8226;</span>
                            <a href="" class="red_text">
                                три спальни
                            </a>
                        </div>
                    </div>
                    <div class="header_logo_bl hlb">
                        <img src="images/time_white.jpg" style="float: left; margin-right: 10px; " />
                        <p class="header_tel black_text">(495) 565 36 66</p>
                        <a href="#" class="header_email black_text">info@sutkihouse.ru</a>
                    </div>
                </div>
            </header>
        </div>
        <div class="clear"></div>
        <div class="article_div">
            <article>
                <?= $content ?>
            </article>
        </div>
        <div class="clear"></div>
        <div class="footer-push"></div>
    </div>

                <div class="footer">
                    <footer>
                        <center>
                            <div class="footer_el">© 2013 SutkiHouse</div>
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
                            <div class="footer_el fe_r"></div>
                        </center>
                    </footer>
               </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
