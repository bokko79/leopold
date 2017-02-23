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

$this->title = 'Create Translation for Room number '.$model->number;
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin([
    'id' => 'create-update-object',
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'fullSpan' => 7,      
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_MEDIUM],
    'options' => ['enctype' => 'multipart/form-data'],
]); ?>

    <?= $form->field($translate, 'lang_code')->dropDownList([ArrayHelper::map(\common\models\Languages::find()->all(), 'code', 'name')         
        ]) ?>


    <?= $form->field($translate, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($translate, 'text')->textArea([]) ?>

    <?= $form->field($translate, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($translate, 'subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($translate, 'teaser')->textInput(['maxlength' => true]) ?>

    <div class="row" style="margin:20px;">
        <div class="col-md-offset-3">
            <?= !$model->isNewRecord ? Html::a('Go Back', Url::to(['view', 'id'=>$model->id]), ['class' => 'btn btn-default']) : null ?>
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Save Updates', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>        
    </div>

    <?php ActiveForm::end(); ?>
