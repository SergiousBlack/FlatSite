<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FlatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'mainImage') ?>

    <?= $form->field($model, 'mainImageInfo1lvl') ?>

    <?= $form->field($model, 'mainImageInfo2lvl') ?>

    <?php // echo $form->field($model, 'mainImageInfo3lvl') ?>

    <?php // echo $form->field($model, 'showMainPage') ?>

    <?php // echo $form->field($model, 'roomNumber') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'addressForMap') ?>

    <?php // echo $form->field($model, 'additionalInfo') ?>

    <?php // echo $form->field($model, 'coastInfo') ?>

    <?php // echo $form->field($model, 'shortInfo') ?>

    <?php // echo $form->field($model, 'fullInfo') ?>

    <?php // echo $form->field($model, 'printText') ?>

    <?php // echo $form->field($model, 'cityCategoryID') ?>

    <?php // echo $form->field($model, 'metaTitle') ?>

    <?php // echo $form->field($model, 'metaKeywords') ?>

    <?php // echo $form->field($model, 'metaDescription') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
