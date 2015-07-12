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
