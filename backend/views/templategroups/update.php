<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\templategroups */

$this->title = 'Обновление шаблона: ' . ' ' . $model->AppartmentID;
$this->params['breadcrumbs'][] = ['label' => 'Templategroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AppartmentID, 'url' => ['view', 'id' => $model->AppartmentID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="templategroups-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
