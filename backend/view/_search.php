<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RoomsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rooms-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'floor') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'is_available') ?>

    <?php // echo $form->field($model, 'file_id') ?>

    <?php // echo $form->field($model, 'available_from') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
