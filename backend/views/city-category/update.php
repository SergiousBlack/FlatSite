<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Citycategory */

$this->title = 'Подкатегория: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Citycategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="citycategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
