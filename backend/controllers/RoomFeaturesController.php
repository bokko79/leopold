<?php

namespace backend\controllers;

use Yii;
use common\models\RoomFeatures;
use common\models\RoomFeaturesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoomFeaturesController implements the CRUD actions for RoomFeatures model.
 */
class RoomFeaturesController extends Controller
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
     * Creates a new RoomFeatures model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if($room = $this->findRoomById(Yii::$app->request->get('room'))){
            $model = new RoomFeatures();
            $feat_array = [];
            if($roomFeatures = $room->roomFeatures){                
                foreach($roomFeatures as $roomFeature){
                    $feat_array[] = $roomFeature->feature_id;
                }
            }
            //print_r($feat_array); die();
            if($features = Yii::$app->request->post('RoomFeatures')){    
            //print_r($features['id']); die();

                foreach($features['id'] as $key=>$feature){
                    if(!in_array($feature, $feat_array)){
                        $roomFeature = new \common\models\RoomFeatures();
                        $roomFeature->room_id = $room->id;
                        $roomFeature->feature_id = $feature;
                        $roomFeature->save();
                    }
                }
                foreach($feat_array as $key=>$feat){
                    if(!in_array($feat, $features['id'])){
                        $this->findModelByFeature($room->id, $feat)->delete();
                    }
                }
                return $this->redirect(['/rooms/view', 'id' => $room->id, /*'setup'=>true*/]);
                       
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'room' => $room,
                ]);
            }
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Finds the RoomFeatures model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return RoomFeatures the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RoomFeatures::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Finds the RoomFeatures model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return RoomFeatures the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findRoomById($id)
    {
        if (($model = \common\models\Rooms::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Finds the RoomFeatures model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return RoomFeatures the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelByFeature($room, $feature)
    {
        if (($model = RoomFeatures::find()->where('feature_id='.$feature.' and room_id='.$room)->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
