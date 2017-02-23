<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>


<?php $form = ActiveForm::begin([
    'id' => 'create-update-object',
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'fullSpan' => 12,      
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_MEDIUM],
    'options' => ['enctype' => 'multipart/form-data'],
]); ?>

    <?= $form->field($model, 'guest_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guest_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'review_text')->textarea(['rows' => 6]) ?>

    <div class="row" style="margin:20px;">
        <div class="col-md-offset-3">
            <?= !$model->isNewRecord ? Html::a('Go Back', Url::to(['view', 'id'=>$model->id]), ['class' => 'btn btn-default']) : null ?>
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Save Updates', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>        
    </div>

    <?php ActiveForm::end(); ?>
