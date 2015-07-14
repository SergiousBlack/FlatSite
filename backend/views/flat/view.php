<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Flat */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Flats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FlatID',
            'name',
            'mainImage',
            'mainImageInfo1lvl',
            'mainImageInfo2lvl',
            'mainImageInfo3lvl',
            'showMainPage',
            'roomNumber',
            'address',
            'addressForMap',
            'additionalInfo',
            'coastInfo',
            'shortInfo:ntext',
            'fullInfo:ntext',
            'printText',
            'cityCategoryID',
            'metaTitle:ntext',
            'metaKeywords:ntext',
            'metaDescription:ntext',
        ],
    ]) ?>

</div>
