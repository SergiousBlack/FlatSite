<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Citycategory */
/* @var $city common\models\City */

$this->title = 'Создать подкатегорию';
$this->params['breadcrumbs'][] = ['label' => 'Citycategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citycategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'city' => $city,
    ]) ?>
 
</div>
