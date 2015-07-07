<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Appartments */

$this->title = 'Изменение апартамента : ' . ' ' . $model->VisibleAppartmentID;
$this->params['breadcrumbs'][] = ['label' => 'Appartments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AppartmentID, 'url' => ['view', 'id' => $model->AppartmentID]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="appartments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
