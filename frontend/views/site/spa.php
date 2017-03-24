<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */

$this->title = \Yii::t('app', 'Wellness & Spa');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Wellness & Spa'), 'url' => ['/site/spa']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['model'] = 'feature-spa';
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
                <?= Html::img('@web/images/features/DSC_4335m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4340m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4349m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4351m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4353m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4356m.jpg') ?>
                <?php $fotorama->end(); ?>
        </div>
        <div class="col-sm-6">
        	<h4><?= \Yii::t('app', 'Description') ?></h4>
		        <p><?= \Yii::t('app', 'Hotel Leopold I offers all its guests FREE OF CHARGE a well equipped Fitness Centre, an ideal place to find the right balance after a hard day’s work or an excursion. Fitness area features Technogym equipment and views over Novi Sad and the Danube River.') ?></p>
                <p><?= \Yii::t('app', 'The Wellness Centre is available as a supplement and it includes Jacuzzi hot tub, Finnish sauna, a relaxation area with comfortable chaise longue. Pamper yourself and choose between an aesthetic treatment or a massage for face, hands, feet and body upon reservation.') ?></p>
        </div>
    </div>
</div> 