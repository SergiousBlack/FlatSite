<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sendedsms */

$this->title = 'Новое сообщение';
$this->params['breadcrumbs'][] = ['label' => 'Sendedsms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sendedsms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
