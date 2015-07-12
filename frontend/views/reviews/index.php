<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

$request = Yii::$app->request;
$get = $request->get('cityid'); 
$this->title = 'Отзывы гостей';
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
                            
                                        <?= Html::a($cit['Name'], ['reviews/index','cityid' => $cit['id']], ['class' => $href_class], ['data-pjax'=>0]) ?>
                                        
                                <?php        
                                    }

                                ?>
                            
                        </div>
                        <div id="cityCategory" style="border: 0px solid #fff; height: 20px; margin-top: 12px; display: block;">
                            <?php if(isset($cat)) {foreach($cat as $c){ ?> 
                                
                                <?= Html::a($c['Name'], ['reviews/index','cityid' => $c['id']], ['class' => ''], ['data-pjax'=>0]) ?>
                           
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

<div class="quest_and_ansv_left_div">
    <div class="quest_and_ansv_block new_bmargin">
        <p class="quest_and_ansv_answer">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        </p>
        <p class="once_question_date_and_author">
            (12.06.2013) <span class="once_question_author">Андрей</span>
        </p>
    </div>

    <div class="quest_and_ansv_block new_bmargin">
        <p class="quest_and_ansv_answer">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        </p>
        <p class="once_question_date_and_author">
            (12.06.2013) <span class="once_question_author">Андрей</span>
        </p>
    </div>

</div>

<div class="quest_and_ansv_right_div">
    <div class="quest_and_ansv_form_div new_height">
        <p class="quest_and_ansv_title">
            Ваш отзыв
        </p>
        <p class="quest_and_ansv_text">
            Здесь Вы можете оставить отзыв о работе нашей компании.
        </p>
        <div class="quest_and_ansv_form">
            <p class="form_label">Имя:</p>
            <input type="text" name="" class="quest_and_ansv_form_input" />
            <p class="form_label">Адрес эл. почты:</p>
            <input type="text" name="" class="quest_and_ansv_form_input" />
            <p class="form_label">Текст отзыва:</p>
            <textarea name="" class="quest_and_ansv_form_big_input"></textarea>
            <input type="submit" name="" value="Оставить отзыв" class="quest_and_ansv_form_submit_button new_margin" />
        </div>
    </div>
    <br />
</div>
<div class="clear"></div>