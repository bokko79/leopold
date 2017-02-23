<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;
use kartik\widgets\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\widgets\FileInput;
use kartik\checkbox\CheckboxX;
?>


<?php $form = ActiveForm::begin([
    'id' => 'create-update-object',
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'fullSpan' => 7,      
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_MEDIUM],
    'options' => ['enctype' => 'multipart/form-data'],
]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>    

    <?= $form->field($model, 'hotel_dept')->dropDownList([ 'leopold' => 'Leopold', 'garni' => 'Garni hotel'], ['prompt' => '']) ?>

    <?= $form->field($model, 'floor')->input('number', ['min'=>0, 'max'=>2]) ?>

    <?= $form->field($model, 'number')->input('number') ?>

    <?= $form->field($model, 'type')->dropDownList([ 'room' => 'Room', 'single_room' => 'Single room', 'double_room' => 'Double room', 'suite' => 'Suite', 'junior_suite' => 'Junior suite', 'family_suite' => 'Family suite', 'honeymoon_suite' => 'Honeymoon suite', 'royal_suite' => 'Royal suite', 'grand_suite' => 'Grand suite', 'presidential_suite' => 'Presidential suite', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'area')->input('number') ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_available')->widget(CheckboxX::classname(), ['pluginOptions'=>['size'=>'sm']]) ?>

    <?= $form->field($model, 'files')->widget(FileInput::classname(), [
            'options' => [/*'multiple' => true,*/ 'accept' => 'image/*'],
            'pluginOptions' => [
                'previewFileType' => 'any',
                'showCaption' => false,
                'showUpload' => false,
                'browseClass' => 'btn btn-info shadow',
                'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                'browseLabel' =>  Yii::t('app', 'Izaberite avatar'),
                'removeLabel' =>  Yii::t('app', 'Izbaci sve'),
                'resizeImage'=> true,
                'maxImageWidth'=> 60,
                'maxImageHeight'=> 60,
                'resizePreference'=> 'width',
            ],
        ]) ?>

    <?= $form->field($model, 'available_from')->textInput(['maxlength' => true]) ?>

    <div class="row" style="margin:20px;">
        <div class="col-md-offset-3">
            <?= !$model->isNewRecord ? Html::a('Go Back', Url::to(['view', 'id'=>$model->id]), ['class' => 'btn btn-default']) : null ?>
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Save Updates', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>        
    </div>

    <?php ActiveForm::end(); ?>
