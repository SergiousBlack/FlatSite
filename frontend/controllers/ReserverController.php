<?php

namespace frontend\controllers;

class ReserverController extends \yii\web\Controller
{
    public $layout = 'LayoutWhite';
    
    public function actionIndex()
    {
        return $this->render('index');
    }

}
