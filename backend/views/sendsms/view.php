<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sendedsms */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sendedsms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sendedsms-view">
 

<!--    <p>
        <?php //Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php // Html::a('Delete', ['delete', 'id' => $model->id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
        //]) ?>
    </p>-->
    <br/>  <br/>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'sender.username',
            'template.text',
            'Status',
            'Target',
            'SendedDate',
        ],
    ]) ?>

</div>
