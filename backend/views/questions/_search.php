<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\QuestionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'show') ?>

    <?= $form->field($model, 'question') ?>

    <?= $form->field($model, 'UserName') ?>

    <?= $form->field($model, 'Mail') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'shortAnser') ?>

    <?php // echo $form->field($model, 'FullAnswer') ?>

    <?php // echo $form->field($model, 'mailAnswer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
