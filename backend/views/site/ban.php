<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
$this->title = '404';
 $this->registerCssFile('@web/css/Error.css');
?>
<!-- Main content -->

 <div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Sutki</b>House</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        
        
        Ув. &nbsp; <?= Yii::$app->user->identity->username ?> вы были забанены на данном сайте. <?= Html::a('Выход',Yii::getAlias('@web').'/site/logout') ?>
        
 
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
