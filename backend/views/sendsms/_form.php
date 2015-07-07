<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Appartments;
use app\models\SmsTemplate;

/* @var $this yii\web\View */
/* @var $model app\models\Sendedsms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sendedsms-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
        <label for="AppartmentID" class="control-label">ID апартамента</label>
    <?= Html::dropDownList('AppartmentID', null,
      ArrayHelper::map(Appartments::find()->all(), 'AppartmentID', 'AppartmentInfo'),[
          'prompt' => '',
          'onchange' => '$.post("'.Url::to('templist').'?id='.'"+$(this).val(), function(data){'
          . '$("select#sendedsms-templateid").html(data);});',
          'class' => 'form-control'
         
      ]) ?> 
    </div>
    <?= $form->field($model, 'templateID')->dropDownList([],
       ['prompt'=>'', 
        'onchange'=>'$.post("'.Url::to('templatetext').'?id='.'"+$(this).val(), function(data){'
          . '$("textarea#templateText").text(data);});'])
        ->label("Шаблон сообщения") ?>
    
    <div class="form-group">
        <label for="templateText" class="control-label">Текст</label>
        <textarea id="templateText" class="form-control" readonly style="width: 50%; resize: none; " ></textarea>
      
    </div>
    
    <?= $form->field($model, 'Target')->textInput(['maxlength' => true])->label('Номер') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Отправить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
