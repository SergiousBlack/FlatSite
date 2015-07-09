<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SmsTemplate */
/* @var $apartments app\models\Appartments */

$this->title = 'Обновление шаблона: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sms Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sms-template-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'apartments' => $apartments,
    ]) ?>

</div>
