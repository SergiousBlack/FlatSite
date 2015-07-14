<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Изображения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-index">

    <h1><?= Html::encode($this->title) ?></h1> 
 

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FlatID',
            'name', 

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update}', //{update}
                'buttons' => [
                    
                'view' => function ($url, $model, $key) {
                    return Html::a('<span class="fa fa-plus"></span>', Yii::$app->urlManager->baseUrl.'/flat-image/create?id='.$model->id); 
                },
                        
                'update' => function ($url, $model, $key) {
                    return Html::a('<span class="fa fa-pencil"></span>', $url);
                },
                ],
            ],
        ]
    ]); ?>

</div>
