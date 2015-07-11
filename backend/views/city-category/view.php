<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Citycategory */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Citycategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citycategory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Name',
            'active',
            'MetaTitle:ntext',
            'MetaKeywords:ntext',
            'MetaDescription:ntext',
            'ParentID',
        ],
    ]) ?>

</div>
