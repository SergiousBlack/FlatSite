<?php

namespace backend\controllers;

use Yii;
use backend\models\Sendedsms;
use backend\models\SendedsmsSearch;
use backend\models\SmsTemplate;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\classes\SmsSender;
use backend\models\SmsStatus;

/**
 * SendsmsController implements the CRUD actions for Sendedsms model.
 */
class SendsmsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Sendedsms models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SendedsmsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTemplatetext($id){
        echo SmsTemplate::find()->where(['id'=>$id])->one()['text'];
    }


    public function actionTemplist($id){
            $countTemplates = SmsTemplate::find()
                    ->where(['idApartment'=>$id])
                    ->count();
            
            $templates = SmsTemplate::find()
                    ->where(['idApartment'=>$id])
                    ->all();
            
            if($countTemplates>0){
                echo '<option> </option>';
                foreach ($templates as $template){
                    echo "<option value='".$template->id."'>".$template->name."</option>";
                }
            }else{
                echo "<option> Шаблоны отсутствуют </option>";
            }
                    
               
    }
    /**
     * Displays a single Sendedsms model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        
       $model =  $this->findModel($id);
      
      
        return $this->render('view', [
            'model' => $model,
            
        ]);
    }

    /**
     * Creates a new Sendedsms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sendedsms();

        
        
        
        if ($model->load(Yii::$app->request->post())) {
            
           $model->senderID = Yii::$app->user->id;
           
           $sender = new SmsSender();
           
           $id = $sender->send_sms($model->Target, urlencode(SmsTemplate::find()->where(['id' => $model->templateID])->one()['text'])); 
           
           $model->IdInSMSC = $id;
            
           $model->Status = SmsStatus::find()->where(['idSMSC'=>$sender->get_status($model->IdInSMSC, $model->Target)])->one()['id'];
           $model->SendedDate = date('Y-m-d H:i:s');
           if($model->save()){ 
                return $this->redirect(['view', 'id' => $model->id]);
           }  
           
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sendedsms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $sender = new SmsSender();
        $model->Status = SmsStatus::find()->where(['idSMSC'=>$sender->get_status($model->IdInSMSC, $model->Target)])->one()['id'];
        $model->save();
        
        
       $searchModel = new SendedsmsSearch();
       $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Deletes an existing Sendedsms model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sendedsms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sendedsms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sendedsms::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
