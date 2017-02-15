<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $phone
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['name', 'email'], 'string', 'max' => 64],
            [['phone'], 'string', 'max' => 21],
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
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }
}
