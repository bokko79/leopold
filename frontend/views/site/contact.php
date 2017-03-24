<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;

$this->title = \Yii::t('app', 'Contact');
$this->params['breadcrumbs'][] = $this->title;

$coord = new LatLng(['lat' => 45.251794, 'lng' => 19.861723]);
$map = new Map([
    'center' => $coord,
    'zoom' => 17,
    
]);

$map->width = '100%';
$map->height = '420';


// Lets add a marker now
$marker = new Marker([
    'position' => $coord,
    'title' => 'My Home Town',
]);
?>
<div class="site-contact" style="padding:0px 0 40px;">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= \Yii::t('app', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.') ?>        
    </p>

    <div class="row">        
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton(\Yii::t('app', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-7">
            <div class="card_container record-full" id="service-location" style="float:none;">
                <?php /* time/loc */ ?>
                <div class="hidden-content-container">                    
                    <div class="media-screen no-margin" id="gmap0-map-canvas">                   
                        <?php $map->display() ?>
                    </div>
                </div>                                               
            </div>
        </div>
    </div>

</div>

        
