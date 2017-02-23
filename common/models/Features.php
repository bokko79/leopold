<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "features".
 *
 * @property string $id
 * @property string $name
 * @property string $icon
 *
 * @property RoomFeatures[] $roomFeatures
 */
class Features extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'features';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'icon'], 'required'],
            [['name', 'icon'], 'string', 'max' => 32],
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
            'icon' => 'Icon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomFeatures()
    {
        return $this->hasMany(RoomFeatures::className(), ['feature_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFa()
    {
        return '<i class="fa fa-'.$this->icon.'"></i>';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFalg()
    {
        return '<i class="fa fa-'.$this->icon.' fa-lg"></i>';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFa2x()
    {
        return '<i class="fa fa-'.$this->icon.' fa-2x"></i>';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFa3x()
    {
        return '<i class="fa fa-'.$this->icon.' fa-3x"></i>';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFullname()
    {
        return '<i class="fa fa-'.$this->icon.'"></i> '.$this->name;
    }
}
