<?php
/* @var $this yii\web\View */
$this->title = 'Квартира';
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\helpers\Html;
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
                            
                                        <?= Html::a($cit['Name'], ['flat/index','cityid' => $cit['id']], ['class' => $href_class], ['data-pjax'=>0]) ?>
                                        
                                <?php        
                                    }

                                ?>
                            
                        </div>
                        <div id="cityCategory" style="border: 0px solid #fff; height: 20px; margin-top: 12px; display: block;">
                            <?php if(isset($cat)) {foreach($cat as $c){ ?> 
                                
                                <?= Html::a($c['Name'], ['flat/index'], ['class' => ''], ['data-pjax'=>0]) ?>
                           
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
<!-- -->
<div class="popup__overlay">
    <a href="#" class="popup__close">&nbsp;</a>
    <div class="flat_big_img_bg_div popup">
        <div>
            <img src="<?=Yii::getAlias('@web')?>/img/0.jpg" class="flat_big_img" number="0" />
            <div class="flat_big_img_prev">
                <div class="flat_big_img_prev_button">
                    ПРЕД
                </div>
            </div>
            <div class="flat_big_img_next">
                <div class="flat_big_img_next_button">
                    СЛЕД
                </div>
            </div>
        </div>
        <div class="flat_big_img_title">
            <span class="flat_galerry_big_img_div_title_red">
                Спальня 25 кв/м
            </span>
            <span class="flat_galerry_big_img_div_title_bold">
                | двуспальная кровать
            </span>
            <span class="flat_galerry_big_img_div_title_norm">
                | размер спального места 200х160
            </span>
        </div>

    </div>

    <div class="flat_nav_panel">
        <div class="slider" style="border: 0px solid red;">
            <div class="slide-list">
                <div class="slide-wrap">
                    <div class="slide-item">
                        <img width="72" height="47" id="0" number="0" src="<?=Yii::getAlias('@web')?>/img/0.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="1" number="1" src="<?=Yii::getAlias('@web')?>/img/1.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="2" number="2" src="<?=Yii::getAlias('@web')?>/img/2.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="3" number="3" src="<?=Yii::getAlias('@web')?>/img/3.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="4" number="4" src="<?=Yii::getAlias('@web')?>/img/4.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="5" number="5" src="<?=Yii::getAlias('@web')?>/img/5.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="6" number="6" src="<?=Yii::getAlias('@web')?>/img/6.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="7" number="7" src="<?=Yii::getAlias('@web')?>/img/7.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="8" number="8" src="<?=Yii::getAlias('@web')?>/img/8.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="9" number="9" src="<?=Yii::getAlias('@web')?>/img/9.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="10" number="10" src="<?=Yii::getAlias('@web')?>/img/10.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="11" number="11" src="<?=Yii::getAlias('@web')?>/img/11.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="12" number="12" src="<?=Yii::getAlias('@web')?>/img/12.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="13" number="13" src="<?=Yii::getAlias('@web')?>/img/13.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="14" number="14" src="<?=Yii::getAlias('@web')?>/img/14.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="15" number="15" src="<?=Yii::getAlias('@web')?>/img/15.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="16" number="16" src="<?=Yii::getAlias('@web')?>/img/16.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="17" number="17" src="<?=Yii::getAlias('@web')?>/img/17.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="18" number="18" src="<?=Yii::getAlias('@web')?>/img/18.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="19" number="19" src="<?=Yii::getAlias('@web')?>/img/19.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="20" number="20" src="<?=Yii::getAlias('@web')?>/img/20.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="21" number="21" src="<?=Yii::getAlias('@web')?>/img/21.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="22" number="22" src="<?=Yii::getAlias('@web')?>/img/22.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                    <div class="slide-item">
                        <img width="72" height="47" id="23" number="23" src="<?=Yii::getAlias('@web')?>/img/23.jpg" alt="" class="flat_nav_mini_img" />
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="navy prev-slide"></div>
        <div class="navy next-slide"></div>

    </div>

</div>

<!-- -->







<div class="div4" style="width: 1000px;">
    <div style=" position: absolute; border: 0px solid red; width: 1000px; height: 370px; z-index: 400;">
        <div style="width: 180px; float: left;" id="but_prev">
            <div class="top_slider_nav_butt tsnb_left">
                <p>предыдущая</p>
                <p>квартира</p>
            </div>
        </div>
        <div style="width: 640px; float: left;" id="but_center">
            <div class="price_zone">
                &nbsp;
            </div>
        </div>
        <div style="width: 180px; float: left;" id="but_next">
            <div class="top_slider_nav_butt tsnb_right">
                <p>следующая</p>
                <p>квартира</p>
            </div>
        </div>
    </div>
        <div style="position: relative; top: -10px; display: block;" id="carousel">
            <div id="s_f_1" name="2" style="left: 180.5px; width: 625px; height: 345px; top: 20px; opacity: 1; z-index: 4;" class="carousel-feature carousel_big_img">
                <a href="/Sutki/Home/Flat" id="flat_big_img_top_slider">
                    <img style="width: 625px; height: 345px;" class="carousel-image" alt="" src="<?=Yii::getAlias('@web')?>/images/0_77633600_1351448634_img.jpg" href="#">
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
                        <div class="allprices">
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
                        </div>
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

            <div id="s_f_2" name="1" style="left: 474px; width: 512px; height: 286px; top: 50px; opacity: 0.4; z-index: 1;" class="carousel-feature carousel_small_img">
                <a href="#" class="other_slide"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="<?=Yii::getAlias('@web')?>/images/0_12312700_1418251437_img.jpg" href="#"></a>
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
                        <div class="allprices">
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
                        </div>
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


            <div id="s_f_3" name="1" style="left: 474px; width: 512px; height: 286px; top: 50px; opacity: 0.4; z-index: 1;" class="carousel-feature carousel_small_img">
                <a href="#" class="other_slide"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="<?=Yii::getAlias('@web')?>/images/0_12312700_1418251437_img.jpg" href="#"></a>
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
                        <div class="allprices">
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
                        </div>
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

            <div id="s_f_4" name="0" style="left: 237px; width: 512px; height: 286px; top: 50px; opacity: 0; z-index: 1;" class="carousel-feature carousel_small_img">
                <a href="#" class="other_slide"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="<?=Yii::getAlias('@web')?>/images/0_84337400_1418026627_img.jpg" href="#"></a>
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
                        <div class="allprices">
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
                        </div>
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

            <div id="s_f_5" name="7" style="left: 0px; width: 512px; height: 286px; top: 50px; opacity: 0.4; z-index: 1;" class="carousel-feature carousel_small_img">
                <a href="#" class="other_slide"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="<?=Yii::getAlias('@web')?>/images/0_52061000_1418467060_img.jpg" href="#"></a>
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
                        <div class="allprices">
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
                        </div>
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
            <div id="s_f_6" name="7" style="left: 0px; width: 512px; height: 286px; top: 50px; opacity: 0.4; z-index: 1;" class="carousel-feature carousel_small_img">
                <a href="#" class="other_slide"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="<?=Yii::getAlias('@web')?>/images/0_52061000_1418467060_img.jpg" href="#"></a>
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
                        <div class="allprices">
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
                        </div>
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

<div class="clear"></div>
<div class="flat_main_div" >
    <div class="way_list_top" style="height: 15px; border: 0px solid red;">
        <div class="way_list_top_sl" style="height: 0px; border: 0px solid red;">&nbsp;</div>
    </div>
    <div class="flat_middle_left_div">
        <div class="flat_detail_main">
            <div class="flat_detail_title">
                подробная информация
            </div>
            <div class="flat_detail_more">
                <p>8-й этаж</p>
                <p>Общая площадь 74 м2</p>
                <p>5 раздельных спальных мест</p>
                <p>Размещение до 6-ти человек </p>
            </div>
            <div class="clear"></div>
        </div>

        <div class="flat_options_main_div">
            <div class="flat_options_left_div">
                <ul>
                    <div class="flat_options_div" id="0">
                        <li><span>Телевизоры "Toshiba" 42' в комнатах<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px;" id="optimg_0">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/0.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="1">
                        <li><span>Телевизор "Toshiba" 32' на кухне<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_1">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/1.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="2">
                        <li><span>Кондиционеры "Panasonic" в комнатах<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_2">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/2.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="3">
                        <li><span>Кабельное TV<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_3">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/3.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="4">
                        <li><span>Интернет Wi-Fi<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_4">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/4.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="5">
                        <li><span>Домофон<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_5">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/5.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="6">
                        <li><span>Стеклокерамическая варочная панель<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_6">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/6.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="7">
                        <li><span>Духовой шкаф<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_7">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/7.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="8">
                        <li><span>Кухонная вытяжка<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_8">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/8.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="9">
                        <li><span>Холодильник<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_9">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/9.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="10">
                        <li><span>Посудомоечная машина<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_10">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/10.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="11">
                        <li><span>Микроволновая печь<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_11">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/11.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="flat_options_right_div">
                <ul>
                    <div class="flat_options_div" id="12">
                        <li><span>Телевизоры "Toshiba" 42' в комнатах<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_12">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/12.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="13">
                        <li><span>Телевизор "Toshiba" 32' на кухне<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_13">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/13.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="14">
                        <li><span>Кондиционеры "Panasonic" в комнатах<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_14">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/14.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="15">
                        <li><span>Кабельное TV<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_15">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/15.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="16">
                        <li><span>Интернет Wi-Fi<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_16">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/16.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="17">
                        <li><span>Домофон<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_17">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/17.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="18">
                        <li><span>Стеклокерамическая варочная панель<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_18">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/18.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="19">
                        <li><span>Духовой шкаф<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_19">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/19.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="20">
                        <li><span>Кухонная вытяжка<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_20">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/20.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="21">
                        <li><span>Холодильник<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_21">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/21.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="22">
                        <li><span>Посудомоечная машина<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_22">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/22.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="flat_options_div" id="23">
                        <li><span>Микроволновая печь<span></li>
                        <div style="display: none; position: absolute; margin-left: 95px; " id="optimg_23">
                            <img style="position: absolute; width: 176px; height: 99px;" class="img-option" src="<?=Yii::getAlias('@web')?>/img/23.jpg">
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div class="flat_left_text">
            &nbsp; Итак, по фотографиям Вы выбрали квартиру, посмотрели ее месторасположение, изучили маршруты движения, необходимые Вам в период пребывания. Удостоверились в том, что данная квартира полностью соответствует Вашим требованиям! Остается связаться с оператором и уточнить актуальность данной квартиры на период Вашего планируемого пребывания, воспользовавшись разделом Контактная информация или заполнив форму запроса. Кнопка расположена внизу страницы с описанием квартиры. При обращении к оператору по телефону, будьте готовы назвать ID номер заинтересовавшей Вас квартиры, а так же интересующие Вас даты размещения. После подтверждения оператором доступности квартиры на период Вашего планируемого пребывания, вы можете перейти непосредственно к бронированию.
        </div>
    </div>
    <div class="flat_middle_right_div">
        <div class="flat_adress_div">
            <p class="flat_adress_title">Адрес:</p>
            <p class="flat_adress_title italic_text not_bold_text">
                М.О. г.Красногорск, Подмосковный бульвар, д.12
            </p>
        </div>
        
        <div class="way_to_flat">
            <div class="map_div">
                <script type="text/javascript">
                    // Создает обработчик события window.onLoad
                    YMaps.jQuery(function () {
                        // Создает экземпляр карты и привязывает его к созданному контейнеру
                        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);

                        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
                        map.setCenter(new YMaps.GeoPoint(37.64, 55.76), 10);
                        // Создает метку, значок которой не скрывается при открытии балуна
                        var placemark = new YMaps.Placemark(new YMaps.GeoPoint(37.609218,55.753559), {hideIcon: false});

                        // Добавляет метку на карту
                        map.addOverlay(placemark);
                    })
                </script>
                <div id="YMapsID" style="width:300px;height:300px; border-radius: 14px;"></div>
              </div>
            <div class="way_to_flat_title">
                Маршруты проезда:
            </div>
            <ul class="ways_list">
                <li><a href=".way_list_top_sl" class="way_to_flat_link">От станции метро "Тушинская" </a></li>
                <li><a href=".way_list_top_sl" class="way_to_flat_link">От станции метро "Мякинино" </a></li>
            </ul>
        </div>
    </div>

    

    <div class="clear"></div>
</div>

<div class="bottom_line">&nbsp;</div>
<div class="bottom_button_div">
    <a href="#">
        <div class="bottom_buttonb">
            Забронировать
        </div>
    </a>

</div>


<div id="similars_flats_div" style="border: 0px solid red; margin: 0px auto; margin-top: 47px; margin-bottom: 72px; width: 940px;">
    <div class="similars_flats">
        <p class="similars_flats_top_p">Красногорск</p>
        <p>Двухкомнатная квартира</p>
        <img src="<?=Yii::getAlias('@web')?>/images/0_12312700_1418251437_img.jpg" />
        <div style="margin-bottom: 11px;">
            <div class="id_in_similar">
                ID: 01
            </div>
            <div class="price_in_similar">
                <div class="price_in_similar_price">
                    6000
                </div>
                <div class="price_in_similar_text">
                    рублей<br />в сутки
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <p style="margin-top: 11px;">ул. Подмосковный б-р д.12</p>
        </div>
    </div>
    <div class="similars_flats similars_flats_margin">
        <p class="similars_flats_top_p">Красногорск</p>
        <p>Двухкомнатная квартира</p>
        <img src="<?=Yii::getAlias('@web')?>/images/0_12312700_1418251437_img.jpg" />
        <div style="margin-bottom: 11px;">
            <div class="id_in_similar">
                ID: 01
            </div>
            <div class="price_in_similar">
                <div class="price_in_similar_price">
                    6000
                </div>
                <div class="price_in_similar_text">
                    рублей<br />в сутки
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <p style="margin-top: 11px;">ул. Подмосковный б-р д.12</p>
        </div>
    </div>
    <div class="similars_flats similars_flats_margin">
        <p class="similars_flats_top_p">Красногорск</p>
        <p>Двухкомнатная квартира</p>
        <img src="<?=Yii::getAlias('@web')?>/images/0_12312700_1418251437_img.jpg" />
        <div style="margin-bottom: 11px;">
            <div class="id_in_similar">
                ID: 01
            </div>
            <div class="price_in_similar">
                <div class="price_in_similar_price">
                    6000
                </div>
                <div class="price_in_similar_text">
                    рублей<br />в сутки
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <p style="margin-top: 11px;">ул. Подмосковный б-р д.12</p>
        </div>
    </div>
    <div class="similars_flats similars_flats_margin">
        <p class="similars_flats_top_p">Красногорск</p>
        <p>Двухкомнатная квартира</p>
        <img src="<?=Yii::getAlias('@web')?>/images/0_12312700_1418251437_img.jpg" />
        <div style="margin-bottom: 11px;">
            <div class="id_in_similar">
                ID: 01
            </div>
            <div class="price_in_similar">
                <div class="price_in_similar_price">
                    6000
                </div>
                <div class="price_in_similar_text">
                    рублей<br />в сутки
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <p style="margin-top: 11px;">ул. Подмосковный б-р д.12</p>
        </div>
    </div>
    <div class="clear"></div>
</div>


<script>


    var top_slider_current_img = 1;
    var number_img_top_slider = 6;

    var display_width = screen.width;

    var display_height = screen.height;
    if (display_height < 800) {
        $(".flat_big_img_title").css("top", "94.5%");
    }
    if (display_height > 800) {
        $(".flat_big_img_title").css("top", "95.5%");
    }

    if (display_width < 1400) {
        $(".slide-item").css("padding", "4.1px");
    }
    if (display_width > 1400) {
        $(".slide-item").css("padding", "4.4px");
    }


    var number_of_img = 24;


    //alert(semi_number_of_mini_img);
    var current_select_img = 0;
    ////
    /* обертка слайдера */
    var slideWrap = jQuery('.slide-wrap');
    /* ссылки на предудыщий иследующий слайд */
    var nextLink = jQuery('.next-slide');
    var prevLink = jQuery('.prev-slide');

    var playLink = jQuery('.auto');

    var is_animate = false;

    /* ширина слайда с отступами */
    var slideWidth = jQuery('.slide-item').outerWidth();

    /* смещение слайдера */
    var newLeftPos = slideWrap.position().left - slideWidth;
    ////
    var img_counter = 0;
    var shift_counter = 0;
    var tmp_counter = 0;
    var is_first = true;
    var is_first_run = true;
    var new_n = 0;
    var n = -1;


    var number_of_mini_img = (((display_width * 63 / 100) - 60) / slideWidth).toFixed();
    var semi_number_of_mini_img = ((number_of_mini_img / 2) + 1).toFixed();

    var fin_left_pos = ((number_of_img * slideWidth) - (number_of_mini_img * slideWidth)) * -1;

    function Flat_slider_main_function(init_type, img_numb) {
        /*alert(' new_n = ' + new_n + ' n = ' + n);
        alert($(".flat_big_img").attr("number"));*/
        if (init_type == true) {
            for (var i = 0; i < number_of_img; i++) {
                delete_border(i);
            }
            counters(img_numb);
            shifts(newLeftPos);
            slider_move_function(img_numb);
            add_border(img_numb);
            if ((img_numb < (number_of_img - 1)) && (img_numb > 0)) {
                show_bottom_next_button();
            }
        } else {
            for (var i = 0; i < number_of_img; i++) {
                delete_border(i);
            }
            counters(img_numb);
            shifts(newLeftPos);
            slider_move_function(img_numb);
            add_border(img_numb);
            if ((img_numb < (number_of_img - 1)) && (img_numb > 0)) {
                show_bottom_next_button();
            }
            /*counters(0);
            shifts(0);
            add_border(0);*/
            //var_reset();
        }

        function var_reset(n) {
            counters(img_numb);
            shifts(newLeftPos);
            img_counter = 0;
            shift_counter = 0;
            tmp_counter = 0;
            img_change(img_numb);
            new_n = 0;
            current_select_img = img_numb;
        }
        function slider_go_forw(newLeftPos) {
            if (!slideWrap.is(':animated')) {
                slideWrap.animate({ left: newLeftPos }, 500, function () {
                    slideWrap
                        .find('.slide-item:first')
                        .css({ 'left': 0 });
                });
            }
        }
        function slider_go_back() {
            var r = slideWrap.position().left + slideWidth;
            slideWrap.animate({ left: r }, 500, function () {
                slideWrap
                    .find('.slide-item:first')
                    .css({ 'left': 0 });
            });
        }
        $('.next-slide').bind("click", function () {
            var tmp_for_next = slideWrap.position().left - slideWidth;
            var tmp_size = -1 * (number_of_img * slideWidth) + (number_of_mini_img * slideWidth);
            show_bottom_prev_button();
            if ((tmp_for_next < tmp_size) || (tmp_for_next == tmp_size)) {
                hide_bottom_next_button();
            } else {
                newLeftPos = slideWrap.position().left - slideWidth;
                slider_go_forw(newLeftPos);
            }

        });

        $('.prev-slide').bind("click", function () {
            var tmp_for_prev = slideWrap.position().left + slideWidth;
            show_bottom_next_button();
            if ((tmp_for_prev == 0) || (tmp_for_prev > 0)) {
                slider_go_back();
                hide_bottom_prev_button();
            } else {
                slider_go_back();
            }

        });

        $(".flat_nav_mini_img").bind("click", function () {
            slider_move_function($(this).attr('number'));
        });
        function counters(new_number) {
            tmp_counter = img_counter;
            img_counter = new_number;
            return tmp_counter;
        }
        function shifts(new_shift) {
            tmp_shift = shift_counter;
            shift_counter = new_shift;
            return tmp_shift;
        }
        function add_border(img_numb) {
            $("#" + img_numb).css('border', '2px solid red');
        }
        function delete_border(img_numb) {
            $("#" + img_numb).css('border', '1px solid #fff');
        }
        function hide_bottom_prev_button() {
            $(".prev-slide").css("display", "none");
        }
        function show_bottom_prev_button() {
            $(".prev-slide").css("display", "block");
        }
        function hide_bottom_next_button() {
            $(".next-slide").css("display", "none");
        }
        function show_bottom_next_button() {
            $(".next-slide").css("display", "block");
        }
        function slider_move_function(current_numb) {
            var left_position = 0;
            var first_img_numb = 0;
            var last_img_numb = 0;
            var next_position = 0;
            var center_img_numb = 0;
            var target_shift = 0;
            var total_left_position = 0;
            var total_right_position = 0;
            var total_right_position_of_img = 0;


            left_position = slideWrap.position().left;
            next_position = current_numb * slideWidth;
            first_img_numb = ((left_position / slideWidth).toFixed()) * -1;
            last_img_numb = Number(first_img_numb) + Number(number_of_mini_img) - 1;
            center_img_numb = ((first_img_numb + last_img_numb) / 2).toFixed();


            target_shift = ((current_numb * slideWidth) - (center_img_numb * slideWidth));

            total_left_position = left_position - target_shift;
            total_right_position = total_left_position;
            total_right_position_of_img = ((number_of_img * slideWidth) - (number_of_mini_img * slideWidth)) * -1;

            if ((total_left_position == 0) || (total_left_position > 0)) {
                slider_go_forw(0);
                hide_bottom_prev_button();
            } else {
                if ((total_left_position == total_right_position_of_img) || (total_left_position < total_right_position_of_img)) {
                } else {
                    slider_go_forw(total_left_position);
                    show_bottom_prev_button();
                }
            }

            if ((total_left_position == total_right_position_of_img) || (total_left_position < total_right_position_of_img)) {
                slider_go_forw(total_right_position_of_img);
                hide_bottom_next_button();
            } else {
                slider_go_forw(total_left_position);
                show_bottom_next_button();
            }

            img_change(current_numb);
            delete_border(counters(current_numb));
            add_border(current_numb);

        }
        function img_change(img_numb) {
            $('.flat_big_img').attr("src", "/frontend/web/img/" + img_numb + ".jpg");
            $('.flat_big_img').attr("number", img_numb);
            //$("#" +img_numb).css('border', '2px solid red');
        }
        $('.flat_big_img_prev').unbind('click');
        $('.flat_big_img_prev').bind('click', function () {
            var left_position3 = 0;
            var first_img_numb3 = 0;
            var last_img_numb3 = 0;
            var next_position3 = 0;
            var center_img_numb3 = 0;
            var target_shift3 = 0;
            var total_left_position3 = 0;
            var total_right_position3 = 0;
            var total_right_position_of_img3 = 0;

            var ttmp = 0;
            new_n = $(".flat_big_img").attr("number");
            new_n--;
            left_position3 = slideWrap.position().left;
            next_position3 = new_n * slideWidth;
            first_img_numb3 = ((left_position3 / slideWidth).toFixed()) * -1;
            last_img_numb3 = Number(first_img_numb3) + Number(number_of_mini_img) - 1;
            center_img_numb3 = ((first_img_numb3 + last_img_numb3) / 2).toFixed();
            if ((new_n > 0) || (new_n == 0)) {
                if ((new_n > center_img_numb3) || (new_n == center_img_numb3)) {
                    img_change(new_n);
                    delete_border(counters(new_n));
                    add_border(new_n);
                } else {
                    img_change(new_n);
                    delete_border(counters(new_n));
                    add_border(new_n);
                    if ((first_img_numb3 < 0) || (first_img_numb3 == 0)) {
                        hide_bottom_prev_button();
                    } else {
                        slider_go_back(slideWrap.position().left + slideWidth);
                        show_bottom_next_button();
                    }
                }
            }
        });
        $('.flat_big_img_next').unbind('click');
        $('.flat_big_img_next').bind('click', function () {
            var left_position2 = 0;
            var first_img_numb2 = 0;
            var last_img_numb2 = 0;
            var next_position2 = 0;
            var center_img_numb2 = 0;
            var target_shift2 = 0;
            var total_left_position2 = 0;
            var total_right_position2 = 0;
            var total_right_position_of_img2 = 0;
            var t = 0;
            new_n = $(".flat_big_img").attr("number");
            new_n++;
            left_position2 = slideWrap.position().left;
            next_position2 = new_n * slideWidth;
            first_img_numb2 = ((left_position2 / slideWidth).toFixed()) * -1;
            last_img_numb2 = Number(first_img_numb2) + Number(number_of_mini_img) - 1;
            center_img_numb2 = ((first_img_numb2 + last_img_numb2) / 2).toFixed();
            if (new_n != number_of_img) {
                if ((new_n < center_img_numb2) || (new_n == center_img_numb2)) {
                    img_change(new_n);
                    delete_border(counters(new_n));
                    add_border(new_n);
                } else {
                    img_change(new_n);
                    delete_border(counters(new_n));
                    add_border(new_n);
                    if (last_img_numb2 == (number_of_img - 1)) {
                        hide_bottom_next_button();
                    } else {
                        slider_go_forw(slideWrap.position().left - slideWidth);
                        show_bottom_prev_button();
                    }
                }
            }
        });

        // Вызов галереи

        /*   p = $('.popup__overlay')
           $('.flat_options_div').click(function () {
               p.css('display', 'block');
               Flat_slider_main_function(true, $(this).attr('id'));
           });
           p.click(function (event) {
               e = event || window.event
               if (e.target == this) {
                   $(p).css('display', 'none');
                   for (var i = 0; i < number_of_img; i++) {
                       delete_border(i);
                   }
                   counters(0);
                   shifts(0);
                   img_counter = 0;
                   shift_counter = 0;
                   tmp_counter = 0;
                   img_change(0);
                   new_n = 0;
                   current_select_img = 0;
                   $(".slide-wrap").css("left", 0);
               }
           });
           $('.popup__close').click(function () {
               p.css('display', 'none');
                for (var i = 0; i < number_of_img; i++){
                   delete_border(i);
               }
               counters(0);
               shifts(0);
               img_counter = 0;
               shift_counter = 0;
               tmp_counter = 0;
               img_change(0);
               new_n = 0;
               current_select_img = 0;
               $(".slide-wrap").css("left", 0);
           });
           $('a#flat_big_img_top_slider').click(function (event) {
               event.preventDefault();
               p.css('display', 'block');
               Flat_slider_main_function(false, $(this).attr('id'));
           });*/

        //

    }


    $(".flat_options_div").mouseover(function () {
        var number = $(this).attr('id');
        $(".flat_options_div").find("#optimg_" + number + "").css('display', 'block');
        $(".flat_options_div").mouseout(function () {
            $(".flat_options_div").find("#optimg_" + number + "").css('display', 'none');
        });
    });

    // Вызов галереи
    /* p = $('.popup__overlay')
     $('.flat_options_div').click(function () {
         p.css('display', 'block');
         Flat_slider_main_function(true, $(this).attr('id'));
     });
     p.click(function (event) {
         e = event || window.event
         if (e.target == this) {
             $(p).css('display', 'none')
         }
     });
     $('.popup__close').click(function () {
         p.css('display', 'none');
     });
     $('a#flat_big_img_top_slider').click(function (event) {
         event.preventDefault();
             setTimeout(function () {
                 p.css('display', 'block');
                 Flat_slider_main_function(false, $(this).attr('id'));
             }, 1500);

     });*/

    p = $('.popup__overlay');
    $('.flat_options_div').click(function () {
        p.css('display', 'block');
        Flat_slider_main_function(true, $(this).attr('id'));
    });
    p.click(function (event) {
        e = event || window.event
        if (e.target == this) {
            $(p).css('display', 'none');
            for (var i = 0; i < number_of_img; i++) {
                delete_border(i);
            }
            counters(0);
            shifts(0);
            img_counter = 0;
            shift_counter = 0;
            tmp_counter = 0;
            img_change(0);
            new_n = 0;
            current_select_img = $(this).attr('id');
            alert($(this).attr('id'));
            $(".slide-wrap").css("left", 0);
        }
    });
    $('.popup__close').click(function () {
        p.css('display', 'none');
        for (var i = 0; i < number_of_img; i++) {
            delete_border(i);
        }
        counters(0);
        shifts(0);
        img_counter = 0;
        shift_counter = 0;
        tmp_counter = 0;
        img_change(0);
        new_n = 0;
        current_select_img = $(this).attr('id');
        $(".slide-wrap").css("left", 0);
    });
    /* $('a#flat_big_img_top_slider').click(function (event) {
         event.preventDefault();
         p.css('display', 'block');
         counters(0);
         shifts(0);
         img_counter = 0;
         shift_counter = 0;
         tmp_counter = 0;
         img_change(0);
         new_n = 0;
         current_select_img = $(this).attr('id');
         alert($(this).attr('id'));
         Flat_slider_main_function(false, $(this).attr('id'));
     });*/



    $(".other_slide").click(function () {
        $(this).attr("class", "actv");
        $(this).attr("id", "flat_big_img_top_slider");
    });
    //

    $('.flat_big_img_prev').mouseover(function () {
        if ($(".flat_big_img").attr("number") == 0) {
        } else {
            $('.flat_big_img_prev_button').css('display', 'block');
            $('.flat_big_img_prev').mouseleave(function () {
                $('.flat_big_img_prev_button').css('display', 'none');
            });
        }
    });
    $('.flat_big_img_next').mouseover(function () {
        var t = number_of_img;
        t--;
        if ($(".flat_big_img").attr("number") == t) {
        } else {
            $('.flat_big_img_next_button').css('display', 'block');
            $('.flat_big_img_next').mouseleave(function () {
                $('.flat_big_img_next_button').css('display', 'none');
            });
        }
    });

    $("a.actv").mouseover(function () {
        $(this).css("box-shadow", "0 0 0 3px #C3C3C3");
        $(this).mouseleave(function () {
            $(this).css("box-shadow", "0 0 0 0 #C3C3C3");
        });
    });

    $('.way_to_flat_link').click(function () { // если в href начинается с # или ., то ловим клик
        var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
        }
        return false; // выключаем стандартное действие
    });

    var carousel = $("#carousel").featureCarousel({
        // include options like this:
        // (use quotes only for string values, and no trailing comma after last option)
        // option: value,
        // option: value
        autoPlay: 0,
        smallFeatureOffset: 30,
        smallFeatureHeight: 286,
        sidePadding: 1,
        leftButtonTag: '#but_prev',
        rightButtonTag: '#but_next',
        trackerSummation: false,
        trackerIndividual: false,
        displayCutoff: number_img_top_slider,
        stopOnHover: false
    });


    function top_slider_del_opacity(img_numb) {
        $("#" + "s_f_" + img_numb).css("opacity", 0.4);
    }
    function top_slider_add_opacity(img_numb) {
        $("#" + "s_f_" + img_numb).css("opacity", 1);
    }
    function top_slider_add_sec_border(img_numb) {
        $("#" + "s_f_" + img_numb).css("box-shadow", "0 0 0 3px #C3C3C3");
    }
    function top_slider_del_sec_border(img_numb) {
        $("#" + "s_f_" + img_numb).css("box-shadow", "0 0 0 0 #C3C3C3");
    }


    $("#but_next").mouseover(function () {
        var tmp_nmb = 0;
        var click_st = false;
        if (top_slider_current_img == number_img_top_slider) {
            tmp_nmb = 1;
        } else {
            tmp_nmb = top_slider_current_img + 1;
        }
        top_slider_add_opacity(tmp_nmb);
        $(".tsnb_right").show();

        $("#but_next").mouseleave(function () {
            $(".tsnb_right").hide();
            top_slider_del_opacity(tmp_nmb);
            top_slider_add_opacity(top_slider_current_img);
        });
    });
    $("#but_next").click(function () {
        $(".tsnb_right").hide();
        if (top_slider_current_img == number_img_top_slider) {
            top_slider_current_img = 1;
        } else {
            top_slider_current_img++;
        }
        $("#" + "s_f_" + top_slider_current_img).css("opacity", 1);
        alert($("#" + "s_f_" + top_slider_current_img).attr('id'));
        //$(".flat_main_div").load('http://localhost:14593/Home/flat1');
    });

    $("#but_prev").mouseover(function () {
        $(".tsnb_left").show();
        var tmp_nmb2 = top_slider_current_img - 1;
        if (top_slider_current_img == 1) {
            top_slider_add_opacity(number_img_top_slider);
        } else {
            top_slider_add_opacity(tmp_nmb2);
        }
        $("#but_prev").mouseleave(function () {
            $(".tsnb_left").hide();
            if (top_slider_current_img == 1) {
                top_slider_del_opacity(number_img_top_slider);
                top_slider_add_opacity(top_slider_current_img);
            } else {
                top_slider_del_opacity(tmp_nmb2);
                top_slider_add_opacity(top_slider_current_img);
            }
        });
    });
    $("#but_prev").click(function () {
        $(".tsnb_left").hide();
        if (top_slider_current_img == 1) {
            top_slider_current_img = number_img_top_slider;
            top_slider_add_opacity(number_img_top_slider);
        } else {
            top_slider_current_img--;
            top_slider_add_opacity(top_slider_current_img);
        }
    });
    $("#but_center").mouseover(function () {
        top_slider_add_sec_border(top_slider_current_img);
        $("#but_center").mouseleave(function () {
            top_slider_del_sec_border(top_slider_current_img);
        });
    });
    $("#but_center").click(function () {
        p.css('display', 'block');
        var img_numb = $(".carousel-feature").attr("name");
        Flat_slider_main_function(false, img_numb);
    });

    $(".price_zone").hover(function () {
        $("#s_f_" + top_slider_current_img).find('.allprices').show();
    }, function () {
        $("#s_f_" + top_slider_current_img).find('.allprices').hide();
    });

</script>