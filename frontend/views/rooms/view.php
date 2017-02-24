<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['model'] = $model->id;
?>

<div class="fadeInUp animated" style="margin:-160px 0 100px; position: relative; color:white; text-shadow: 3px 3px #000;">
        <h1 style="color:white;"><?= Html::encode($this->title) ?></h1>

        <h3 style="color:#daa520;"><?= \Yii::t('app', 'from') . ' €' .$model->price ?></h3>
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
            ); 
            ?>
            <?php foreach ($model->roomFiles as $media): ?>
                <?= Html::img('@web/images/room/'.$media->file->name) ?>
            <?php endforeach; ?>
            <?php $fotorama->end(); ?>
    </div>
    <div class="col-sm-6">
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'name',
            'floor',
            'number',
            'type',
            'price',
            'hotel_dept',
            //'description',
        ],
    ]) ?>
        <h4><?= \Yii::t('app', 'Features') ?></h4>
        <ul class="column3">
            <?php if($roomFeatures = $model->roomFeatures){
                foreach($roomFeatures as $roomFeature){
                    echo '<li style="padding:5px;"><table><tr><td style="text-align:right; width:30px;">'.$roomFeature->feature->falg. '</td><td style="padding-left:10px;">'. $roomFeature->feature->name.'</td></tr></table></li>';
                }
            } ?>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        
    <h4><?= \Yii::t('app', 'Description') ?></h4>
        <p><?= $model->description ?></p>
        
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        
    <h4><?= \Yii::t('app', 'Reviews') ?></h4>
        
    </div>
</div>

        
    


