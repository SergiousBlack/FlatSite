<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Flats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Flat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'mainImage',
            'mainImageInfo1lvl',
            'mainImageInfo2lvl',
            // 'mainImageInfo3lvl',
            // 'showMainPage',
            // 'roomNumber',
            // 'address',
            // 'addressForMap',
            // 'additionalInfo',
            // 'coastInfo',
            // 'shortInfo:ntext',
            // 'fullInfo:ntext',
            // 'printText',
            // 'cityCategoryID',
            // 'metaTitle:ntext',
            // 'metaKeywords:ntext',
            // 'metaDescription:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
