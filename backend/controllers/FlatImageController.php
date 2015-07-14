<?php

namespace backend\controllers;

use Yii;
use common\models\Images;
use common\models\FlatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter; 
use yii\base\Model;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * FlatImageController implements the CRUD actions for Images model.
 */
class FlatImageController extends Controller
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
     * Lists all Images models.
     * @return mixed
     */
    public function actionIndex()
    {
         
        $searchModel = new FlatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Images model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Images model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        
        $flat = \common\models\Flat::find()->where(['id'=>$id])->one();
        $images = [new Images()];
        
        if(Images::find()->where(['flatID'=>$id])->count()>0){
            return $this->redirect('update?id='.$id);
        }
       
        if(!empty(Yii::$app->request->post())){
             
            
            $images = Images::createMultiple(Images::classname()); 
            Model::loadMultiple($images, Yii::$app->request->post());

            $file = [];
            
             foreach($images as $i=>$ad_image):
                $file[$i]=  UploadedFile::getInstanceByName("Images[".$i."][file]");
                $images[$i]->img_url = md5($file[$i]->name.time()).'.'.$file[$i]->extension;  
             endforeach;
            
              
             
            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($images) 
                );
            }

            // validate all models
            $valid = $flat->validate();
            $valid = Model::validateMultiple($images) && $valid;

            $flag  = true;
            
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                        foreach ($images as $i=>$image) {
                             
                            $image->flatID = $flat->id; 
                             
                            
                            if (!($flag = $image->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                            
                            $file[$i]->saveAs(dirname(Yii::$app->basePath).'\\img\\'.$image->img_url);
                        }
                    
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['index']);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        
        
        return $this->render('create', [
            'flat' => $flat,
            'images' => (empty($images)) ? [new Images()] : $images
        ]);
    }


    /**
     * Updates an existing Images model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
   public function actionUpdate($id)
    {
        $flat = \common\models\Flat::find()->where(['id'=>$id])->one();
        
        $images = $flat->images;

        if ($flat->load(Yii::$app->request->post())) {

            
             $oldIDs = ArrayHelper::map($images, 'id', 'id');
            $images = Images::createMultiple(Images::classname(), $images);
            Model::loadMultiple($images, Yii::$app->request->post());
             $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($images, 'id', 'id')));
             
             $file = [];
             foreach($images as $i=>$ad_image):
                $file[$i]=  UploadedFile::getInstanceByName("Images[".$i."][file]");
                if($file[$i]!=null){
                    $images[$i]->img_url = md5($file[$i]->name.time()).'.'.$file[$i]->extension; 
                }
             endforeach;

            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($images)
                );
            }

            $valid = Model::validateMultiple($images);
            $flag = true;
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                  
                        if (! empty($deletedIDs)) {
                            Images::deleteAll(['id' => $deletedIDs]);
                        }
                        
                         foreach ($images as $i=>$image) {
                             
                            $need = FALSE; 
                            $image->flatID = $flat->id; 
            
                            if($file[$i]!=NULL){ 
                                $need = TRUE;
                              }
                            if (!($flag = $image->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                            if($need){
                                $file[$i]->saveAs(dirname(Yii::$app->basePath).'\\img\\'.$images[$i]->img_url);
                            }
                        }
                    
                    if ($flag) {
                        $transaction->commit(); 
                        return $this->redirect(['index']);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->render('update', [
            'flat' => $flat,
            'images' => (empty($images)) ? [new Images] : $images
        ]);
    }


    /**
     * Deletes an existing Images model.
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
     * Finds the Images model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Images the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Images::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
