<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ImagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="images-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'img_url') ?>

    <?= $form->field($model, 'info1lvl') ?>

    <?= $form->field($model, 'info2lvl') ?>

    <?php // echo $form->field($model, 'info3lvl') ?>

    <?php // echo $form->field($model, 'optionID') ?>

    <?php // echo $form->field($model, 'flatID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
