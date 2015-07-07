<?php

namespace frontend\controllers;

class CooperationController extends \yii\web\Controller
{
    public $layout = 'LayoutWhite';
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
