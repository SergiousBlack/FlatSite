<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\models\SignupForm;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use iutbay\yii2kcfinder\KCFinderInputWidget;
/**
 * Site controller
 */
class SiteController extends Controller
{
     
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index', 'test'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

 
    public function  actionBanned(){
        $this->layout  = 'error';
        return $this->render('ban');
        
    }
    
    public function actionError()
    {
      $this->layout = 'error';
      
        return $this->render('error');
    }

    public function actionIndex()
    { 
         
        return $this->render('index');
    }

     
    



    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            
           if(Yii::$app->user->can('БАН')){
               return $this->redirect('banned');
           }
            
            return $this->goBack();
            
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
     
    
}
