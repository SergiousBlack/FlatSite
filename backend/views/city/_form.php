<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'TextInfo')->widget(CKEditor::className(),
            [
                'options' => ['rows' => 6],
                'preset' => 'standart',
                 
            ]) ?>

    <?= $form->field($model, 'MetaTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'MetaKeywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'MetaDescription')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
