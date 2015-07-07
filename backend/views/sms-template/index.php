<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchSmsTemplate */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Шаблоны сообщений';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sms-template-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать шаблон', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            'text:ntext',
            'idApartment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
