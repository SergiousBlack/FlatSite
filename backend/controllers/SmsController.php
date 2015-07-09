<?php

namespace backend\controllers;


use yii\web\Response;
use yii\filters\ContentNegotiator;
use backend\classes\SmsSender;

class SmsController extends \yii\rest\Controller
{
    
    public function behaviors()
    {
        return [
            [
                'class' => ContentNegotiator::className(),
                'only' => ['send', 'status'],
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
        ];
    }
    
    public function actionSend()
    {
         $sender = new SmsSender();
         $to = \Yii::$app->request->post('to');
         $text = \Yii::$app->request->post('text');
         
         if(!empty($to)&&!empty($text)){
            return  $sender->send_sms($to, $text);
         }
         
         return "Error";
    }
    
//    public function actionStatus(){
//         $sender  = new  SmsSender();
//         $id =  \Yii::$app->request->post('id'); 
//       if(!empty($id)){
//           return $sender->get_status('112532','+380933137698');
//       }
//       
//       return "Error";
//    }

}
