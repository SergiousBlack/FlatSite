<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\templategroups */

$this->title = $model->AppartmentID;
$this->params['breadcrumbs'][] = ['label' => 'Templategroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="templategroups-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->AppartmentID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->AppartmentID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить этот шаблон?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'AppartmentID',
            'AppartmentInfo',
        ],
    ]) ?>

</div>
