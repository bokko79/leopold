<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */

$this->title = 'Leopold '. \Yii::t('app', 'Restaurant');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Restaurant'), 'url' => ['/site/restaurant']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['model'] = 'feature-restaurant';
$model = \common\models\Rooms::findOne(1);
?>

<div class="container">
    <div class="maintitlesphere center fadeInUp animated">
            <h1 style="color:white;"><?= Html::encode($this->title) ?></h1>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
    </div>

    <div class="row">
        <div class="col-sm-6">
             <?php 
                $fotorama = \metalguardian\fotorama\Fotorama::begin(
                    [
                        'options' => [
                            'loop' => true,
                            'hash' => true,
                            'allowfullscreen' => true,
                            'width' => '100%',
                            'minwidth' => '400',
                            'maxwidth' => '555',
                            'minheight' => '372',
                            'maxheight' => '100%',
                            'height' => '372',
                            'ratio' => 555/372,
                            'nav' => false,
                            //'fit' => 'cover',
                        ],
                        //'tagName' => 'span',
                        'useHtmlData' => false,
                        'htmlOptions' => [
                            'style'=>'',
                            'class'=>'card-width-cover'
                        ],
                    ]
                ); ?>
                <?php /* foreach ($model->roomFiles as $media): ?>
                    
                <?php endforeach; */ ?>
                <?= Html::img('@web/images/features/DSC_4007m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4010m.jpg') ?>
                <?php $fotorama->end(); ?>
        </div>
        <div class="col-sm-6">
        	<h4><?= \Yii::t('app', 'Description') ?></h4>
		        <p><?= \Yii::t('app', 'You can enjoy delicious meals from our specially created menu. International cuisine with a touch of local flair will make your lunch or dinner unforgettable in the marvelous restaurant of Hotel Leopold I.') ?></p>

				<p><?= \Yii::t('app', 'Specialy created fasting menu with winter tastes will wake up your appetite and make you ask for more.') ?></p>

        		<p><?= \Yii::t('app', 'In the close proximity of the hotel 3 restaurants (a Serbian National Restaurant, an Italian Restaurant/Pizzeria and a Fish Restaurant) have a the total capacity of 700 seats.') ?></p>

        		<p><?= \Yii::t('app', 'The restaurants are located on the plateau of the fortress, next to the famous clock and provide a unique view of the Danube river and the city of Novi Sad.') ?></p>
        </div>
    </div>
</div> 