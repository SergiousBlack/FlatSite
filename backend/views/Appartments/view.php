<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Appartments */

$this->title = 'Апартамент №'.$model->AppartmentID;
$this->params['breadcrumbs'][] = ['label' => 'Appartments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appartments-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->AppartmentID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->AppartmentID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'AppartmentID',
            'AppartmentInfo',
            'VisibleAppartmentID',
        ],
    ]) ?>

</div>
