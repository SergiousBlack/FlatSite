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
                    <a href="<?=Url::to("reserver")?>"><div class="main_menu_el main_menu_r_border m_m_el_1 <?= Yii::$app->controller->id == 'reserver' ? 'main_menu_el_active' : ''  ?>">Бронирование и оплата</div></a>
                    <a href="<?=Url::to("questionsandanswers")?>"><div class="main_menu_el main_menu_r_border m_m_el_2 <?= Yii::$app->controller->id == 'questionsandanswers' ? 'main_menu_el_active' : ''  ?>">Вопросы и ответы</div></a>
                    <a href="<?=Url::to("reviews")?>"><div class="main_menu_el main_menu_r_border m_m_el_3 <?= Yii::$app->controller->id == 'reviews' ? 'main_menu_el_active' : ''  ?>">Отзывы гостей</div></a>
                    <a href="<?=Url::to("cooperation")?>"><div class="main_menu_el main_menu_r_border m_m_el_4 <?= Yii::$app->controller->id == 'cooperation' ? 'main_menu_el_active' : ''  ?>">Сотрудничество</div></a>
                    <a href="<?=Url::to("partners")?>"><div class="main_menu_el main_menu_r_border m_m_el_5 <?= Yii::$app->controller->id == 'partners' ? 'main_menu_el_active' : ''  ?>">Партнеры</div></a>
                    <a href="<?=Url::to("contacts")?>"><div class="main_menu_el m_m_el_6 <?= Yii::$app->controller->id == 'contacts' ? 'main_menu_el_active' : ''  ?>">Контакты</div></a>
                
                </div>
            </nav>
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
