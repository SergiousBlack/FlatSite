<?php

use yii\helpers\Html;

/* @var $this yii\web\View */ 

$this->title = 'Обновить: ' . ' ' . $flat->name;
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $flat->name, 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'flat' => $flat,
        'images' => $images
    ]) ?>

</div>
