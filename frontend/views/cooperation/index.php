<?php
/* @var $this yii\web\View */
$this->title = 'Сотрудничество';
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

$request = Yii::$app->request;
$get = $request->get('cityid'); 
?>

<div class="header_div white_bg">
            <header class="white_bg white_header">
<div class="header_logo">
                    <div class="header_logo_bl hlb_left">
                        <a href="<?=Url::to("site")?>">
                            <img src="<?=Yii::$app->Images->baseUrl?>/logo_white.jpg" />
                        </a>
                    </div>
                    <div class="header_logo_bl hlb_center hlb_center_wh">
                        <?php Pjax::begin(['enablePushState' => false]); ?>
                        <div style="border: 0px solid #fff; height: 20px;">
                            
                            
                                  <?php foreach($city as $cit){ $cit['id'] == $get ? $href_class='index_city_href_wh' : $href_class=''?>                                   
                            
                                        <?= Html::a($cit['Name'], ['cooperation/index','cityid' => $cit['id']], ['class' => $href_class], ['data-pjax'=>0]) ?>
                                        
                                <?php        
                                    }

                                ?>
                            
                        </div>
                        <div id="cityCategory" style="border: 0px solid #fff; height: 20px; margin-top: 12px; display: block;">
                            <?php if(isset($cat)) {foreach($cat as $c){ ?> 
                                
                                <?= Html::a($c['Name'], ['cooperation/index','cityid' => $c['id']], ['class' => ''], ['data-pjax'=>0]) ?>
                           
                            <?php }} ?>
                        </div>
                        <?php Pjax::end(); ?>
                    </div>
                    <div class="header_logo_bl hlb">
                        <img src="<?=Yii::$app->Images->baseUrl?>/time_white.jpg" style="float: left; margin-right: 10px; " />
                        <p class="header_tel black_text">(495) 565 36 66</p>
                        <a href="#" class="header_email black_text">info@sutkihouse.ru</a>
                    </div>
                </div>
            </header>
        </div>
        <div class="clear"></div>
<article>

    <p class="reserv_title"><?= Html::encode($this->title) ?></p>

</article>
