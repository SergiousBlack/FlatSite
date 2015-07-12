<?php

namespace frontend\controllers;
use Yii;
use common\models\City;
use common\models\Citycategory;

class PartnersController extends \yii\web\Controller
{
    public $layout = 'LayoutWhite';
    
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $get = $request->get('cityid'); 
        
        if(isset($get)){
            return $this->render('index',
                [
                    'city' => City::find()->where(['active' => 1])->all(),
                    'cat' => Citycategory::find()->where(['parentID' => $get, 'active' => 1])->all()
                ]);
        }else{
            return $this->render('index',
                [
                    'city' => City::find()->where(['active' => 1])->all()
                ]);
        }
    }

}
