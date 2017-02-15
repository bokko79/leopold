<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $time
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'time'], 'required'],
            [['type'], 'string'],
            [['time'], 'integer'],
            [['name'], 'string', 'max' => 128],
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
            'type' => 'Type',
            'time' => 'Time',
        ];
    }
}
