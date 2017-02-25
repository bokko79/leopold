<?php

namespace backend\controllers;

use Yii;
use common\models\Rooms;
use common\models\RoomsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * RoomsController implements the CRUD actions for Rooms model.
 */
class RoomsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Rooms models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RoomsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rooms model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Rooms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Rooms();
        if ($model->load(Yii::$app->request->post())) {
            $model->files = UploadedFile::getInstance($model, 'files');
            $model->update_time = time();
            if($model->save()){
                if ($model->files) {$model->uploadFiles();}
                return $this->redirect(['view', 'id' => $model->id]);
            }                
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Creates a new Translation Rooms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionTranslate($id)
    {
        $model = $this->findModel($id);
        $translate = new \common\models\Translations();
        if ($translate->load(Yii::$app->request->post())) {
            $translate->entity = 'room';
            $translate->entity_id = $model->id;
            if($translate->save()){            
                return $this->redirect(['view', 'id' => $model->id]);
            }                
        } else {
            return $this->render('translate', [
                'model' => $model,
                'translate' => $translate,
            ]);
        }
    }

    /**
     * Updates an existing Rooms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->files = UploadedFile::getInstance($model, 'files');
            if($model->save()){
                if ($model->files) {$model->uploadFiles();}
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * pdates an existing Translation Rooms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionUpdateTranslate($id)
    {
        $translate = $this->findTranslation($id);
        $model = Rooms::findOne($translate->entity_id);
        if ($translate->load(Yii::$app->request->post()) and $translate->save()) {  
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update-translate', [
                'model' => $model,
                'translate' => $translate,
            ]);
        }
    }

    /**
     * Deletes an existing Rooms model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rooms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Rooms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Rooms::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Finds the Rooms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Rooms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findTranslation($id)
    {
        if (($model = \common\models\Translations::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
