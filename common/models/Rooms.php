<?php

namespace common\models;

use Yii;
use yii\imagine\Image;

/**
 * This is the model class for table "rooms".
 *
 * @property string $id
 * @property string $name
 * @property integer $floor
 * @property string $hotel_dept
 * @property integer $number
 * @property string $type
 * @property integer $area
 * @property string $price
 * @property integer $is_available
 * @property string $file_id
 * @property string $available_from
 * @property string $update_time
 *
 * @property Offers[] $offers
 * @property RoomFeatures[] $roomFeatures
 * @property RoomFiles[] $roomFiles
 * @property RoomReviews[] $roomReviews
 */
class Rooms extends \yii\db\ActiveRecord
{
    public $files; 
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
            [['name'], 'required'],
            [['floor', 'number', 'area', 'is_available', 'file_id', 'available_from', 'update_time'], 'integer'],
            [['hotel_dept', 'type'], 'string'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 80],
            [['files'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif'],
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
            'hotel_dept' => 'Hotel Dept',
            'number' => 'Number',
            'type' => 'Type',
            'area' => 'Area',
            'price' => 'Price',
            'is_available' => 'Is Available',
            'file_id' => 'File ID',
            'available_from' => 'Available From',
            'update_time' => 'Update Time',
        ];
    }

    public function uploadFiles()
    {
        if ($this->validate()) {
           
            $fileName = $this->id . '_' . time();
            $this->files->saveAs('images/room/' . $fileName . '1.' . $this->files->extension);         
            
            $image = new \common\models\Files();
            $image->name = $fileName . '.' . $this->files->extension;
            $image->type = 'image';
            $image->time = time();
            
            $thumb = 'images/room/'.$fileName.'1.'.$this->files->extension;                          
            Image::thumbnail($thumb, 800, 640)->save(\Yii::getAlias('images/room/'.$fileName.'.'.$this->files->extension), ['quality' => 80]); 
            
            $image->save();

            if($image->save()){
                $roomFile = new \common\models\RoomFiles();
                $roomFile->room_id = $this->id;
                $roomFile->file_id = $image->id;
                $this->files = null;
                $roomFile->save();
            }

            unlink(\Yii::getAlias($thumb));
            
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOffers()
    {
        return $this->hasMany(Offers::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomFeatures()
    {
        return $this->hasMany(RoomFeatures::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomFiles()
    {
        return $this->hasMany(RoomFiles::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomReviews()
    {
        return $this->hasMany(RoomReviews::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTranslations()
    {
        $action_translation = Translations::find()->where('entity="room" and entity_id='.$this->id)->all();
        if($action_translation) {
            return $action_translation;
        }
        return false;      
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTranslation()
    {
        $action_translation = Translations::find()->where('lang_code="'.Yii::$app->language.'" and entity="room" and entity_id='.$this->id)->one();
        if($action_translation) {
            return $action_translation;
        }
        return false;      
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTName()
    {
        if($this->getTranslation()) {
            return $this->getTranslation()->name;
        }       
        return $this->name;   
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDescription()
    {
        if($this->getTranslation()) {
            return $this->getTranslation()->text;
        }       
        return $this->name;   
    }
}
