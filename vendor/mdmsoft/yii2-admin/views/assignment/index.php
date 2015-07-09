<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\Assignment */

$this->title = "Пользователи";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-index">
    
	<h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Новый пользователь', ['/user/signup'], ['class' => 'btn btn-success']) ?>
    </p>
        
	<?php
    Pjax::begin([
        'enablePushState'=>false,
    ]);
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => $usernameField,
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'
            ],
        ],
    ]);
    Pjax::end();
    ?>

</div>
