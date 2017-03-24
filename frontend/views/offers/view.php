<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'Offers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['model'] = $model->id;
?>
<div class="container">
    <div class="maintitlesphere right fadeInUp animated">
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
                ); 
                ?>
                <?php $fotorama->end(); ?>
        </div>
        <div class="col-sm-6">
            <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                
                'name',
                'hotel_dept',
                'fullArea',
                'fullPrice',
                
                //'description',
            ],
        ]) ?>
            <h4><?= \Yii::t('app', 'Description') ?></h4>
        </div>
    </div>
</div> 

<div class="maincont" style="background: #e1eff1; padding: 20px 0; border-top: 1px solid #aaa;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
                
                <h4><?= \Yii::t('app', 'Features') ?></h4>
                   
            </div>
        </div>
    </div>
</div>
<div class="maincont" style="background: #e1eff1; padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
            <h4><?= \Yii::t('app', 'Reviews') ?></h4>
                
            </div>
        </div>
    </div>
</div>
        
    


