<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\SmsStatus;
use backend\models\SendedSms;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SendedsmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сообщения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sendedsms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новое сообщение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
           // 'senderID',
            //'templateID',
            'Target',
            [
                'attribute'=>'templateID',
                'value'=>'template.name'
            ],
            [
                'attribute'=>'Status',
                'value'=> 'status.Name',
            ],
            
//            [   
//                'attribute'=>'SendedDate',
//                'value'
//                'format' => ['time','H:i:s'],
//                
//            ],           
         
            'SendedDate',
            [
                'attribute'=>'senderID',
                'value'=>'sender.username'
            ],
            
           

            [   'class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update}',
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
