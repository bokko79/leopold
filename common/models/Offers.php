<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "offers".
 *
 * @property string $id
 * @property string $room_id
 * @property string $name
 * @property string $time
 *
 * @property Rooms $room
 */
class Offers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'name', 'time'], 'required'],
            [['room_id', 'time'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['room_id' => 'id']],
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
            'name' => 'Name',
            'time' => 'Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'room_id']);
    }
}
