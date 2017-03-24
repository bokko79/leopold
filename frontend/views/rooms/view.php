<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */

$this->title = $model->tName;
/*$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
$this->params['model'] = $model->id;
?>
<div class="container">
    <div class="maintitlesphere fadeInUp animated">
            <h1 style="color:white;"><?= Html::encode($this->title) ?></h1>

            <?php /* ?><h3 style="color:#daa520;"><?= \Yii::t('app', 'from') . ' €' .$model->price ?></h3> <?php */ ?>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <?php // Html::a(\Yii::t('app', 'Book now'), ['index'], ['class'=>'btn btn-primary']) ?>

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

                <?php 
                   /* $palette = new Imagine\Image\Palette\RGB();
                    $imagine = new Imagine\Gd\Imagine();
                    $image = $imagine->create(new Imagine\Image\Box(400, 300), $palette->color('#000'));

                    $image->draw()
                        ->ellipse(new Imagine\Image\Point(200, 150), new Imagine\Image\Box(300, 225), $image->palette()->color('fff'));

                    $image->save(\Yii::getAlias('images/home/slider-04.jpg'));*/ ?>
        </div>
        <div class="col-sm-6">
            <h4><?= $model->tName ?></h4>
            <ul>
                <li><?= $model->hotel_dept ?></li>
                <li><?= $model->fullArea ?></li>
                <li><?= $model->fullPrice ?></li>
            </ul>
            

            <h4 style="margin-top: 30px;"><?= \Yii::t('app', 'Description') ?></h4>
            <p><?= $model->description ?> <?= $model->fullArea ?></p>
        </div>
    </div>
</div> 

<div class="maincont" style="background: #e1eff1; padding: 30px 0; border-top: 1px solid #aaa; margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                
                <h4><?= \Yii::t('app', 'Features') ?></h4>
                <ul class="column4">
                    <?php if($roomFeatures = $model->roomFeatures){
                        foreach($roomFeatures as $roomFeature){
                            echo '<li style="padding:5px;"><table><tr><td style="text-align:right; width:30px;">'.$roomFeature->feature->falg. '</td><td style="padding-left:10px;">'. $roomFeature->feature->name.'</td></tr></table></li>';
                        }
                    } ?>
                </ul>    
            </div>
        </div>
    </div>
</div>
<?php if($reviews = $model->roomReviews): ?>
<div class="maincont" style="background: #e1eff1; padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr>
            <h4><?= \Yii::t('app', 'Reviews') ?></h4>
                       <?php  foreach($reviews as $review){ ?>
                            
                            <table class="bordered" style="border-top:1px solid #ccc;">
                                <tr>
                                    <td class="hint" style="color: gray;">
                                        <small><?= Yii::$app->formatter->asDate($review->time, 'php:n. mm Y.') ?></small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?= $review->review_text ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="hint">
                                        <b><small><?= $review->guest_name ?>, <?= $review->guest_country ?></small></b>
                                    </td>
                                </tr>
                            </table>

                       <?php } ?>
            </div>
        </div>
    </div>
</div>
        
<?php endif; ?>


