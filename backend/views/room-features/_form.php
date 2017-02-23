<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$feat = ArrayHelper::map(\common\models\Features::find()->all(), 'id', 'fullname');

$checkedList = []; 
if($roomFeatures = $room->roomFeatures){
	foreach($roomFeatures as $roomFeature){
		$checkedList[] = $roomFeature->feature_id;
	}
}
$model->id = $checkedList; 
?>


<?php $form = ActiveForm::begin([
    'id' => 'create-update-object',
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'fullSpan' => 12,      
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_MEDIUM],
    'options' => ['enctype' => 'multipart/form-data'],
]); ?>

    <?php
    			
		echo $form->field($model, 'id')->checkboxList($feat, ['class'=>'column6 multiselect'])->label(false);	
	?>

    <div class="row" style="margin:20px;">
        <div class="col-md-offset-9">
            <?= !$model->isNewRecord ? Html::a('Go Back', Url::to(['view', 'id'=>$model->id]), ['class' => 'btn btn-default']) : null ?>
            <?= Html::submitButton('Save Updates', ['class' => 'btn btn-primary']) ?>
        </div>        
    </div>

    <?php ActiveForm::end(); ?>
