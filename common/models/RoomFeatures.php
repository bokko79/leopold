<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room_features".
 *
 * @property string $id
 * @property string $room_id
 * @property string $feature_id
 * @property integer $status
 *
 * @property Rooms $room
 * @property Features $feature
 */
class RoomFeatures extends \yii\db\ActiveRecord
{
    public $ids = [];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room_features';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'feature_id'], 'required'],
            [['room_id', 'feature_id', 'status', 'ids'], 'integer'],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['room_id' => 'id']],
            [['feature_id'], 'exist', 'skipOnError' => true, 'targetClass' => Features::className(), 'targetAttribute' => ['feature_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_id' => 'Room ID',
            'feature_id' => 'Feature ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'room_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeature()
    {
        return $this->hasOne(Features::className(), ['id' => 'feature_id']);
    }
}
