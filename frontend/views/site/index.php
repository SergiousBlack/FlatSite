<?php
/* @var $this yii\web\View */
/* @var $asd string */
$this->title = 'SutkiHouse';
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\helpers\Html;
$index_text = [
            'a' => 'Основным видом деятельности компании является предоставление в краткосрочную аренду жилых помещений, находящихся в нашем непосредственном управлении. Мы гарантируем полное соответствие размещенных на сайте квартир их описанию и представленным фотографиям.Это прежде всего гарантия результата. Вы получаете именно ту кваритру, которую выбрали по фотографиям. У нас нет “темных лошадок”, специалисты нашей компании лично осматривают объект и лишь затем размещают его на сайте.',
            'b' => 'Это прежде всего гарантия результата. Вы получаете именно ту кваритру, которую выбрали по фотографиям. У нас нет “темных лошадок”, специалисты нашей компании лично осматривают объект и лишь затем размещают его на сайте. ',
            'c' => 'Это прежде всего гарантия результата. Вы получаете именно ту кваритру, которую выбрали по фотографиям. У нас нет “темных лошадок”, специалисты нашей компании лично осматривают объект и лишь затем размещают его на сайте. ',
            'd' => 'Это прежде всего гарантия результата. Вы получаете именно ту кваритру, которую выбрали по фотографиям. У нас нет “темных лошадок”, специалисты нашей компании лично осматривают объект и лишь затем размещают его на сайте. ',
            'e' => 'Это прежде всего гарантия результата. Вы получаете именно ту кваритру, которую выбрали по фотографиям. У нас нет “темных лошадок”, специалисты нашей компании лично осматривают объект и лишь затем размещают его на сайте. ',
];
$bottom_text = "Это прежде всего гарантия результата. Вы получаете именно ту кваритру, которую выбрали по фотографиям. У нас нет “темных лошадок”, специалисты нашей компании лично осматривают объект и лишь затем размещают его на сайте.";

$request = Yii::$app->request;
$get = $request->get('cityid'); 
?>

    
   
          <div class="header_div">
            <header>
                <div class="header_logo">
                    <div class="header_logo_bl hlb_left">
                        <a href="<?=Url::to("site")?>">
                            <img src="//img.sh.ru/logo_red.png" />
                        </a>
                    </div>
                    <div class="header_logo_bl hlb_center">
                        
                        <div style="border: 0px solid #fff; height: 20px;">
                            
                            
                                  <?php foreach($city as $cit){ $cit['id'] == $get ? $href_class='index_city_href' : $href_class=''?>                                   
                            
                                        <?=Html::a($cit['Name'], ['site/index','cityid' => $cit['id']], ['class' => $href_class], ['data-pjax'=>0])?>
                                        
                                <?php        
                                    }

                                ?>
                            
                        </div>
                        <div id="cityCategory" style="border: 0px solid #fff; height: 20px; margin-top: 12px; display: block;">
                            <?php if(isset($cat)) {foreach($cat as $c){ ?> 
                                
                                <?=Html::a($c['Name'], ['site/index','cityid' => $c['id']], ['class' => ''], ['data-pjax'=>0])?>
                           
                            <?php }} ?>
                        </div>
                        
                    </div>
                    <div class="header_logo_bl hlb">
                        <img src="//img.sh.ru/time_red.jpg" style="float: left; margin-right: 10px; " />
                        <p class="header_tel">(495) 565 36 66</p>
                        <a href="#" class="header_email">info@sutkihouse.ru</a>
                    </div>
                </div>
                
                <!-- -->
                <div class="div4" style="z-indez:99999!important; width: 1000px;">
                    <div style="position: relative; top: -10px; display: block;" id="gallery">
                        <div style="left: 180.5px; width: 625px; height: 345px; top: 20px; opacity: 1; z-index: 4;" class="carousel-feature carousel_big_img">
                            <a href="<?=Url::to("flat")?>">
                                <img style="width: 625px; height: 345px;" class="carousel-image" alt="" src="//img.sh.ru/0_77633600_1351448634_img.jpg" href="#">
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
                            <a href="flat"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="//img.sh.ru/0_12312700_1418251437_img.jpg" href="#"></a>
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
                            <a href="flat"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="//img.sh.ru/0_12312700_1418251437_img.jpg" href="#"></a>
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
                            <a href="flat"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="//img.sh.ru/0_84337400_1418026627_img.jpg" href="#"></a>
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
                            <a href="flat"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="//img.sh.ru/0_52061000_1418467060_img.jpg" href="#"></a>
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
                            <a href="flat"><img style="width: 512px; height: 286px;" class="carousel-image" alt="" src="//img.sh.ru/0_52061000_1418467060_img.jpg" href="#"></a>
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


<article>
    <div class="left_art">

        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td valign="top">
                        &nbsp;
                    </td>
                    <td valign="top" style="font-size:24px; font-family: 'times new roman', times, serif;">
                        Мы рады приветствовать Вас на сайте компании
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        &nbsp;
                    </td>
                    <td valign="top" style="font-size:24px; font-family: 'times new roman', times, serif; ">
                        "СуткиХаус"!
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        &nbsp;
                    </td>
                    <td valign="top">
                        &nbsp;
                    </td>
                </tr>
                
                <?php 
                foreach ($index_text as $it)
                {
                    echo '
                    <tr>
                    <td valign="top">
                        <img src="//img.sh.ru/galka.jpg" style="margin-top: 10px; margin-right: 20px;" height="39" width="37">
                    </td>
                    <td valign="top" class="main_page_info_text">
                       '.$it.'
                        <br/>
                        &nbsp;
                    </td>
                </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="right_art">
        <h3 style="font-size:16px !important;">
            Забронировать - просто!
        </h3>
        <p class="reserv_block">
            Для бронирования квартиры выберите любой&nbsp;удобный для Вас способ оплаты из представленных в разделе <a href="http://test3.asp-s.ru/ru/bronirovanie_i_oplata.htm">Бронирование и оплата</a>.
        </p>

        <p>
            <a href="#">
                <img src="//img.sh.ru/ps.jpg" height="97" width="259">
            </a>
        </p>
 
        <br>
        <a href="#" class="ask_and_answer_link">Вопрос - ответ</a>
        <br><br>
        <div class="ask_and_answer_min">
            <div class="ask_and_answer_min_ask"><a href="#">Основным видом деятельности компании является предоставление в краткосрочную аренду жилых помещений</a></div>
            <div class="ask_and_answer_min_auth">Автор</div>

            <div class="ask_and_answer_min_ask"><a href="#">Основным видом деятельности компании является предоставление в краткосрочную аренду жилых помещений</a></div>
            <div class="ask_and_answer_min_auth">Автор</div>

            <div class="ask_and_answer_min_ask"><a href="#">Основным видом деятельности компании является предоставление в краткосрочную аренду жилых помещений</a></div>
            <div class="ask_and_answer_min_auth">Автор </div>
        </div>
    </div>
</article>
<div class="clear"></div>
<div class="other_div_text"><?php echo $bottom_text;?></div>
