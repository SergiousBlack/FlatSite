<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Options;

/* @var $this yii\web\View */
/* @var $model common\models\Flat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mainImage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mainImageInfo1lvl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mainImageInfo2lvl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mainImageInfo3lvl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'showMainPage')->textInput() ?>

    <?= $form->field($model, 'roomNumber')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addressForMap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'additionalInfo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coastInfo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortInfo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fullInfo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'printText')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cityCategoryID')->textInput() ?>

    <?= $form->field($model, 'metaTitle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'metaKeywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'metaDescription')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'options')
             ->dropDownList(ArrayHelper::map(Options::find()->asArray()->orderBy('name')->all(), 'id', 'name'), ['multiple' => true])
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
