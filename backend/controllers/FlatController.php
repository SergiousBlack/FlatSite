<?php

namespace backend\controllers;

use Yii;
use common\models\Flat;
use common\models\FlatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\UploadedFile;
/**
 * FlatController implements the CRUD actions for Flat model.
 */
class FlatController extends Controller
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
     * Lists all Flat models.
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
     * Displays a single Flat model.
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
     * Creates a new Flat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Flat();
        if($model->load(Yii::$app->request->post())){
        
            
            
            $model->MainImagefile =  UploadedFile::getInstance($model, 'MainImagefile');
            
            $fileName = md5($model->MainImagefile->name.time()).'.'.$model->MainImagefile->extension;
            
            $model->mainImage = $fileName;
            
             
            if($model->save()){
                $model->MainImagefile->saveAs(dirname(Yii::$app->basePath).'\\img\\'.$fileName);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }  
            
        return $this->render('create', [
                'model' => $model,
            ]);
        
    }

    /**
     * Updates an existing Flat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
         
        if ($model->load(Yii::$app->request->post())) {
            
            $model->MainImagefile =  UploadedFile::getInstance($model, 'MainImagefile');
            
            if(isset($model->MainImagefile)){
                $fileName = md5($model->MainImagefile->name.time()).'.'.$model->MainImagefile->extension;

                $model->mainImage = $fileName;
            } 
            
            if($model->save()){
               if(isset($model->MainImagefile)){
                $model->MainImagefile->saveAs(dirname(Yii::$app->basePath).'\\img\\'.$fileName);
               }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Flat model.
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
     * Finds the Flat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Flat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Flat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionCategory($id){
        
         $countTemplates = \common\models\Citycategory::find()
                    ->where(['ParentID'=>$id])
                    ->count();
            
            $templates = \common\models\Citycategory::find()
                    ->where(['ParentID'=>$id])
                    ->all();
            
            if($countTemplates>0){
                echo '<option> </option>';
                foreach ($templates as $template){
                    echo "<option value='".$template->id."'>".$template->Name."</option>";
                }
            }else{
                echo "<option> Подкатегории отсутствуют </option>";
            }
    }
    
}
