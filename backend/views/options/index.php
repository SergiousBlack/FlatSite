<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FlatoptionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Опции');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flatoptions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Добавить опцию'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
 
            'name',
            [
                'attribute' => 'active',
                'format' => 'raw',
                'value' => function ($model, $index, $widget) {
                    return Html::checkbox('active[]', $model->active, ['value' => $index, 'disabled' => true]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
