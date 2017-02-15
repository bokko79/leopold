<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rooms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'floor')->textInput() ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList([ 'room' => 'Room', 'single_room' => 'Single room', 'double_room' => 'Double room', 'suite' => 'Suite', 'junior_suite' => 'Junior suite', 'family_suite' => 'Family suite', 'honeymoon_suite' => 'Honeymoon suite', 'royal_suite' => 'Royal suite', 'grand_suite' => 'Grand suite', 'presidential_suite' => 'Presidential suite', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_available')->textInput() ?>

    <?= $form->field($model, 'file_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'available_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_time')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
