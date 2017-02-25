<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "translations".
 *
 * @property string $id
 * @property string $entity
 * @property string $entity_id
 * @property string $lang_code
 * @property string $name
 * @property string $text
 * @property string $title
 * @property string $subtitle
 * @property string $teaser
 *
 * @property Languages $langCode
 */
class Translations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'translations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['entity', 'text'], 'string'],
            [['entity_id', 'lang_code', 'name', 'text'], 'required'],
            [['entity_id'], 'integer'],
            [['lang_code'], 'string'],
            [['name', 'subtitle'], 'string', 'max' => 128],
            [['title'], 'string', 'max' => 64],
            [['teaser'], 'string', 'max' => 256],
            [['lang_code'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['lang_code' => 'code']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entity' => 'Entity',
            'entity_id' => 'Entity ID',
            'lang_code' => 'Lang Code',
            'name' => 'Name',
            'text' => 'Text',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'teaser' => 'Teaser',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Languages::className(), ['code' => 'lang_code']);
    }
}
