<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CitycategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citycategory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'active') ?>

    <?= $form->field($model, 'MetaTitle') ?>

    <?= $form->field($model, 'MetaKeywords') ?>

    <?php // echo $form->field($model, 'MetaDescription') ?>

    <?php // echo $form->field($model, 'ParentID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
