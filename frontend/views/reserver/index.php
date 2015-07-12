<?php
/* @var $this yii\web\View */
$this->title = 'Бронирование и оплата';
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

$request = Yii::$app->request;
$get = $request->get('cityid'); 

$some_text = 'Итак, по фотографиям Вы выбрали квартиру, посмотрели ее месторасположение, изучили маршруты движения, необходимые Вам в период пребывания. Удостоверились в том, что данная квартира полностью соответствует Вашим требованиям! Остается связаться с оператором и уточнить актуальность данной квартиры на период Вашего планируемого пребывания, воспользовавшись разделом &nbsp;<a href="http://www.sutkihouse.nordor.biz/contacts/"><em class="red_text">Контактная информация</em></a>&nbsp;или заполнив форму запроса. Кнопка&nbsp;расположена внизу страницы с описанием квартиры. При обращении к оператору по телефону, будьте готовы назвать&nbsp;<strong>ID</strong>&nbsp;номер заинтересовавшей Вас квартиры, а так же интересующие Вас даты размещения. После подтверждения оператором доступности квартиры на период Вашего планируемого пребывания, вы можете перейти непосредственно к бронированию.';
?>

<div class="header_div white_bg">
            <header class="white_bg white_header">
<div class="header_logo">
                    <div class="header_logo_bl hlb_left">
                        <a href="<?=Url::to("site")?>">
                            <img src="//img.sh.ru/logo_white.jpg" />
                        </a>
                    </div>
                    <div class="header_logo_bl hlb_center hlb_center_wh">
                        <?php Pjax::begin(['enablePushState' => false]); ?>
                        <div style="border: 0px solid #fff; height: 20px;">
                            
                            
                                  <?php foreach($city as $cit){ $cit['id'] == $get ? $href_class='index_city_href_wh' : $href_class=''?>                                   
                            
                                        <?= Html::a($cit['Name'], ['reserver/index','cityid' => $cit['id']], ['class' => $href_class], ['data-pjax'=>0]) ?>
                                        
                                <?php        
                                    }

                                ?>
                            
                        </div>
                        <div id="cityCategory" style="border: 0px solid #fff; height: 20px; margin-top: 12px; display: block;">
                            <?php if(isset($cat)) {foreach($cat as $c){ ?> 
                                
                                <?= Html::a($c['Name'], ['reserver/index','cityid' => $c['id']], ['class' => ''], ['data-pjax'=>0]) ?>
                           
                            <?php }} ?>
                        </div>
                        <?php Pjax::end(); ?>
                    </div>
                    <div class="header_logo_bl hlb">
                        <img src="//img.sh.ru/time_white.jpg" style="float: left; margin-right: 10px; " />
                        <p class="header_tel black_text">(495) 565 36 66</p>
                        <a href="#" class="header_email black_text">info@sutkihouse.ru</a>
                    </div>
                </div>
            </header>
        </div>
        <div class="clear"></div>


<p class="reserv_title"><?= Html::encode($this->title) ?></p>

<div class="article_shift">
    <p class="main_page_info_text">
        <?php echo $some_text; ?>
    </p>
    <p></p>
    
    <p class="main_page_info_text">
        <?php echo $some_text; ?>
    </p>
    <p></p>
</div>