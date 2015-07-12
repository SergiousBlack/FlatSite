<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Flatoptions */

$this->title = Yii::t('app', 'Создать опцию');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flatoptions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flatoptions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
