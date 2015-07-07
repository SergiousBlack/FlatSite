<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Appartments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appartments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AppartmentInfo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VisibleAppartmentID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
