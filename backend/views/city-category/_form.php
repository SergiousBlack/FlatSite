<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Citycategory */
/* @var $form yii\widgets\ActiveForm */
/* @var $city common\models\City */
?>

<div class="citycategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'ParentID')->dropDownList(ArrayHelper::map($city, 'id', 'Name'))->label('Главная категория') ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'MetaTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'MetaKeywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'MetaDescription')->textarea(['rows' => 6]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
