<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CitycategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подкатегории городов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citycategory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать подкатегорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'Name',
             [
                'attribute' => 'active',
                'format' => 'raw',
                'value' => function ($model, $index, $widget) {
                    return Html::checkbox('active[]', $model->active, ['value' => $index, 'disabled' => true]);
                },
            ],
            //'MetaTitle:ntext',
            //'MetaKeywords:ntext',
            // 'MetaDescription:ntext',
            // 'ParentID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
