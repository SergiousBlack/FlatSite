<?php
/* @var $this yii\web\View */
$this->title = 'SutkiHouse';
use yii\helpers\Url;
use common\models\City;
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


$citys = City::find()->where(['active' => 1])->all();

?>
<script>

       /* $('body').on('click', '.index_city_button', function(e){
            var href = $(this).attr('href');
            var self = this;
            $.get('http://sh.ru/frontend/web/site/citys', function(){
                var pjax_id = $(self).closest('.pjax-wraper').attr('id');
                alert(pjax_id);
                $.pjax.reload('#w0');
                //alert(9);
            });
            return false;*/
});
</script>
    

          <div class="header_div">
            <header>
                <div class="header_logo">
                    <div class="header_logo_bl hlb_left">
                        <a href="<?= Url::to('site')?>">
                            <img src=" <?=Yii::$app->Images->baseUrl?>/logo_red.png" />
                        </a>
                    </div>
                    <div class="header_logo_bl hlb_center">
                        <div style="border: 0px solid #fff; height: 20px;">
                            
                        </div>
                        <div style="border: 0px solid #fff; height: 20px; margin-top: 3px; display: block;">
                            <?php Pjax::begin(); ?>
                            <?= Html::a("Refresh", ['site/citys'], ['class' => 'btn btn-lg btn-primary']);?>
                                
                            <?php Pjax::end(); ?>
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
                </div>
                <!-- -->
                <!-- -->
            </header>
        </div>

