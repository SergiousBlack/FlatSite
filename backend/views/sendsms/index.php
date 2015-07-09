<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\SmsStatus;
use backend\models\SendedSms;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SendedsmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сообщения';
$this->params['breadcrumbs'][] = $this->title;

 
?>
<div class="sendedsms-index">

     
    
    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новое сообщение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
         'rowOptions' => function ($model, $key, $index, $grid) {
         
                    $u= yii\helpers\Url::toRoute(['/sendsms/update']); 
                       
        
                return ['id' => $model['id'], 
                        'onclick' => 
                            'location.href="'.$u.'?id="+(this.id);'
                        ];
        },
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'Target',
            [
                'attribute'=>'templateID',
                'value'=>'template.name'
            ],
            [
                'attribute'=>'Status',
                'value'=> 'status.Name',
            ],
           
            [
                'attribute'=>'SendedDate',
                'value' => 'SendedDate',
                    'format' => ['time'],
                
                'filter' => 
                DatePicker::widget([
                                                        'model' => $searchModel,
                                                        'attribute' => 'SendedDate',
                                                        'attribute2' => 'SendedDateEnd',
                                                        'options' => ['placeholder' => 'От'],
                                                        'options2' => ['placeholder' => 'До'],
                                                        'type' => DatePicker::TYPE_RANGE,
                                                        'separator' => ' - ',
                                                        'pluginOptions' => [
                                                            'format' => 'dd-mm-yyyy',
                                                            'autoclose' => true,
                                                        ]
                                                    ]),
            ],
            
            [
                'attribute' => 'senderID',
                'value' => 'sender.username'
            ],
            
           

            [   'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}', //{update}
                'buttons' => [
     
                'update' => function ($url, $model, $key) {
                    return Html::a('<span class="fa fa-undo"></span>', $url, [
                        'data-method' => 'post',
                        'data-pjax' => '1',
                ]);},]
    
            ],
            
            
        ],
    ]); ?>

</div>
