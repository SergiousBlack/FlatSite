<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

$request = Yii::$app->request;
$get = $request->get('cityid'); 
$this->title = 'Вопросы и ответы';
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
                            
                                        <?= Html::a($cit['Name'], ['questionsandanswers/index','cityid' => $cit['id']], ['class' => $href_class], ['data-pjax'=>0]) ?>
                                        
                                <?php        
                                    }

                                ?>
                            
                        </div>
                        <div id="cityCategory" style="border: 0px solid #fff; height: 20px; margin-top: 12px; display: block;">
                            <?php if(isset($cat)) {foreach($cat as $c){ ?> 
                                
                                <?= Html::a($c['Name'], ['questionsandanswers/index','cityid' => $c['id']], ['class' => ''], ['data-pjax'=>0]) ?>
                           
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


    <p class="reserv_title"><?= Html::encode($this->title) ?></p>

<div class="quest_and_ansv_left_div">
    <div class="quest_and_ansv_block">
        <p class="quest_and_ansv_question">
            <a href="#">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </a>        
        </p>
        <p class="quest_and_ansv_answer">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC
        </p>
    </div>

    <div class="quest_and_ansv_block">
        <p class="quest_and_ansv_question">
            <a href="#">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </a>
        </p>
        <p class="quest_and_ansv_answer">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC
        </p>
    </div>

    <div class="quest_and_ansv_block">
        <p class="quest_and_ansv_question">
            <a href="#">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </a>
        </p>
        <p class="quest_and_ansv_answer">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC
        </p>
    </div>
</div>
    
<div class="quest_and_ansv_right_div">
    <div class="quest_and_ansv_form_div">
        <p class="quest_and_ansv_title">
            Задать вопрос
        </p>
        <p class="quest_and_ansv_text">
            Вы можете задать интересующий Вас вопрос, и наши специалисты ответят Вам на него как можно быстрее.
        </p>
        <div class="quest_and_ansv_form">
            <p class="form_label">Ваше имя:</p>
            <input name="we" class="quest_and_ansv_form_input" required="" type="text">
            <p class="form_label">Адрес эл. почты:</p>
            <input name="" class="quest_and_ansv_form_input" required="" type="text">
            <p class="form_label">Ваш вопрос:</p>
            <textarea name="" class="quest_and_ansv_form_big_input" required=""></textarea>
            <input name="" class="quest_and_ansv_form_checkbox_inp" type="checkbox"> <span class="quest_and_ansv_form_checkbox">Уведомить об ответе по электронной почте</span>
            <input name="" value="Получить ответ" class="quest_and_ansv_form_submit_button" type="submit">
        </div>
    </div>
    <br>
</div>
    
<div class="clear"></div>
<hr/>    

<p class="once_question_title">
    Вы можете задать интересующий Вас вопрос, и наши специалисты ответят Вам на него как можно быстрее?
</p>

<p class="once_question_date_and_author">
    (12.06.2013) <span class="once_question_author">Андрей</span>
</p>

<p class="once_question_answer">
    "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
</p>

<p class="once_question_date_and_author">
    (13.06.2013) <span class="once_question_author">Администратор</span>
</p>
 

<a href="#" class="once_question_back_button">
        <p class="once_question_back_button_div">
            Вернуться в раздел
        </p>
</a>

<br/>
