<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SmsTemplate */
/* @var $apartments app\models\Appartments */ 

$this->title = 'Создание шаблона';
$this->params['breadcrumbs'][] = ['label' => 'Sms Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sms-template-create">

    <h1><?= Html::encode($this->title) ?></h1>
     
    <?= $this->render('_form', [
        'model' => $model,
        'apartments' => $apartments,
    ]) ?>

</div>
