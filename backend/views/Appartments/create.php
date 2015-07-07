<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Appartments */

$this->title = 'Создание';
$this->params['breadcrumbs'][] = ['label' => 'Appartments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appartments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
