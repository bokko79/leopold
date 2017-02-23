<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room_reviews".
 *
 * @property string $id
 * @property string $room_id
 * @property string $guest_name
 * @property string $guest_country
 * @property string $review_text
 * @property string $time
 *
 * @property Rooms $room
 */
class RoomReviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room_reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'guest_name', 'review_text', 'time'], 'required'],
            [['room_id', 'time'], 'integer'],
            [['review_text'], 'string'],
            [['guest_name', 'guest_country'], 'string', 'max' => 32],
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
            'guest_name' => 'Guest Name',
            'guest_country' => 'Guest Country',
            'review_text' => 'Review Text',
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
