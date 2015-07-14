<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */ 
/* @var $form yii\widgets\ActiveForm */
/* @var $flat common\models\Flat */


?>

<div class="images-form">

   <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data','id'=>'dynamic-form']]); ?>
    
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($flat, 'id')->textInput(['maxlength' => true]) ?>
        </div> 
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="fa fa-picture-o"></i> Изображения</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 20, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $images[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                     'id', 
                    'info1lvl',
                    'info2lvl',
                    'info3lvl',
                    'file',
                    'optionID', 
                    'position'
                    
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($images as $i => $image): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Изображение</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <?php
                                // necessary for update action.
                                if (! $image->isNewRecord) {
                                    echo Html::activeHiddenInput($image, "[{$i}]id");
                                }
                            ?>  
                            <div class="col-lg-2"> 
                                <?= $form->field($image, "[{$i}]info1lvl")->textInput() ?>
                            </div>
                            <div class="col-lg-2"> 
                                <?= $form->field($image, "[{$i}]info2lvl")->textInput() ?>
                            </div>
                            <div class="col-lg-2"> 
                                <?= $form->field($image, "[{$i}]info3lvl")->textInput() ?>
                            </div>
                            <div class="col-lg-1"> 
                                <?= $form->field($image, "[{$i}]position")->textInput() ?>
                            </div>
                            <div class="col-lg-3"> 
                                
                                <?php
                                if(!$image->isNewRecord){
                                echo $form->field($image, "[{$i}]file")->widget(FileInput::className(), [
                                            'options' => ['accept' => 'image/*'],
                                    
                                            'pluginOptions' => [
                                                'initialPreview'=>[ 
                                                    Html::img('//img.sh.ru/' . $image->img_url,['width'=>'200']), 
                                                ],
                                                'initialCaption'=>$image->img_url,
                                                'overwriteInitial'=>true,
                                                'previewFileType' => 'image',
                                                'showUpload' => false,
                                                'browseLabel' => '',
                                                'removeLabel' => '',
                                                'mainClass' => 'input-group-md'
                                            ]
                                        ]);
                                }else{
                                    echo $form->field($image, "[{$i}]file")->widget(FileInput::className(), [
                                            'options' => ['accept' => 'image/*'],
                                    
                                            'pluginOptions' => [
                                                
                                                'overwriteInitial'=>true,
                                                'previewFileType' => 'image',
                                                'showUpload' => false,
                                                'browseLabel' => '',
                                                'removeLabel' => '',
                                                'mainClass' => 'input-group-md'
                                            ]
                                        ]);
                                }
                                        
                                        ?>
                            </div>
                            <div class="col-lg-2"> 
                                <?= $form->field($image, "[{$i}]optionID")->dropDownList(yii\helpers\ArrayHelper::map($flat->options, 'id', 'name'),['prompt'=>'']) ?>
                            </div>
                      
                        </div><!-- .row -->
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Подтвердить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
