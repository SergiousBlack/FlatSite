<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Options;
use common\models\City;
use yii\helpers\Url;
use common\models\Citycategory;
use kartik\widgets\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Flat */
/* @var $form yii\widgets\ActiveForm */


$CityID  = Citycategory::find()->where(['id'=>$model->cityCategoryID])->one();
$categories  = [];
if(isset($CityID)){
    $categories = ArrayHelper::map(Citycategory::find()->where(['parentID'=>$CityID->attributes['ParentID']])->all(),'id','Name');
}

 
?>

<div class="flat-form" style="min-height: 2000px;">
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="col-lg-6">
         <label for="AppartmentID" class="control-label">Категория</label>
       <?= Html::dropDownList('id', isset($CityID->attributes['Name'])?$CityID->attributes['ParentID']:'',
      ArrayHelper::map(City::find()->orderBy('name asc')->all(), 'id', 'Name'),[
          'prompt' => '', 
          'onchange' => '$.post("'.Url::to('category').'?id='.'"+$(this).val(), function(data){'
          . '$("select#flat-citycategoryid").html(data);});',
          'class' => 'form-control'
         
      ]) ?> 
        
         <?= $form->field($model, 'cityCategoryID')->dropDownList(
                 $categories
                 ,
                ['prompt'=>''])
        ->label("Подкатегория")?>
        
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
         
        <?= $form->field($model, 'FlatID')->textInput(['maxlength' => true]) ?>
         
        <?= $form->field($model, 'showMainPage')->checkbox(['class'=>'']) ?> 
        <?= $form->field($model, 'roomNumber')->textInput() ?>
        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'addressForMap')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'additionalInfo')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'coastInfo')->textInput(['maxlength' => true]) ?>
        
    </div> 
    <div class="col-lg-6 ">
        
        <?php if(!$model->isNewRecord){
            echo $form->field($model, 'MainImagefile')->widget(\kartik\widgets\FileInput::className(),[ 
                         'pluginOptions' => [ 
                            'initialPreview'=>[ 
                                Html::img('//img.sh.ru/' . $model->mainImage,['width'=>'200']), 
                            ], 
                            'initialCaption'=>$model->mainImage,
                            'overwriteInitial'=>true,
                            'showUpload' => false,
                            'browseLabel' => '',
                            'removeLabel' => '',
                            'mainClass' => 'input-group-md'
                        ]
                    ]); 
            }else{
            echo $form->field($model, 'MainImagefile')->widget(\kartik\widgets\FileInput::className(),[ 
                         'pluginOptions' => [   
                            'overwriteInitial'=>true,
                            'showUpload' => false,
                            'browseLabel' => '',
                            'removeLabel' => '',
                            'mainClass' => 'input-group-md'
                        ]
                    ]); 
                } ?>

        <?= $form->field($model, 'mainImageInfo1lvl')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'mainImageInfo2lvl')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'mainImageInfo3lvl')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-12">
        <?= $form->field($model, 'shortInfo')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'fullInfo')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'printText')->textarea(['rows' => 6]) ?>



        <?= $form->field($model, 'metaTitle')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'metaKeywords')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'metaDescription')->textarea(['rows' => 6]) ?>
    </div>

    <div class="col-lg-12">
        <?=
                $form->field($model, 'options')
                    ->widget(Select2::className(),[
                        'size' => Select2::MEDIUM,
                        'theme' => Select2::THEME_BOOTSTRAP,
                        'options' => ['placeholder' => 'Выберите опции','multiple' => true],
                        'data'=>ArrayHelper::map(Options::find()->asArray()->orderBy('name')->all(), 'id', 'name'),
                        'pluginOptions' => [
                            'tags' => true,
                            'maximumInputLength' => 10
                        ],
                    ])
        ?>

<?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    </div>
<?php ActiveForm::end(); ?>

</div>
