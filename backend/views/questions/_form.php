<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Questions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'show')->checkbox() ?>

    <?= $form->field($model, 'question')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UserName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
                                                    'options' => ['placeholder' => 'Дата написания'],
                                                    'pluginOptions' => [
                                                        'autoclose'=>true
                                                    ]
                                            ]); ?>

    <?= $form->field($model, 'shortAnser')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'FullAnswer')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mailAnswer')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Подтвердить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
