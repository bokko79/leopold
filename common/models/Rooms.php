<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property string $id
 * @property string $name
 * @property integer $floor
 * @property integer $number
 * @property string $type
 * @property string $price
 * @property integer $is_available
 * @property string $file_id
 * @property string $available_from
 * @property string $update_time
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'floor', 'number', 'file_id'], 'required'],
            [['floor', 'number', 'is_available', 'file_id', 'available_from', 'update_time'], 'integer'],
            [['type'], 'string'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'floor' => 'Floor',
            'number' => 'Number',
            'type' => 'Type',
            'price' => 'Price',
            'is_available' => 'Is Available',
            'file_id' => 'File ID',
            'available_from' => 'Available From',
            'update_time' => 'Update Time',
        ];
    }
}
