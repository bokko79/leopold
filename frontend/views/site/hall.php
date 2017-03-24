<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */

$this->title = \Yii::t('app', 'Congress Hall');
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Congress Hall'), 'url' => ['/site/hall']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['model'] = 'feature-congress';
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
                <?= Html::img('@web/images/features/DSC_4107m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4111m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4113m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4145m.jpg') ?>
                <?= Html::img('@web/images/features/DSC_4500m.jpg') ?>
                <?php $fotorama->end(); ?>
        </div>
        <div class="col-sm-6">
        	<h4><?= \Yii::t('app', 'Description') ?></h4>
		        <p><?= \Yii::t('app', 'Style. Glamour. Sophistication. Whether it\'s an exclusive product launch, an elegant gala dinner, a private meeting of the board, a corporate incentive, a quick working lunch or a personal occasion to celebrate, your special event at Hotel Leopold I will be an experience to remember.') ?></p>

                <p><?= \Yii::t('app', 'From the Baroque-inspired Congress Hall to the warm intimacy of the Board Room, Hotel Leopold I proposes a range of elegantly appointed meeting and reception venues for up to 60 participants, each supported by contemporary technological equipment and personalised banqueting services. An expert team of meeting co-ordinators is ready to assist you with all your professional needs and to ensure the success of your events.') ?></p>

                <p><?= \Yii::t('app', 'Board Room with the capacity of 16 seats is equipped with a round table, television, DVD player and other necessary technical equipment.') ?></p>
        </div>
    </div>
</div> 