<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = \Yii::t('app', 'About');
$this->params['breadcrumbs'][] = $this->title;

$model = \common\models\Rooms::findOne(1);
?>
<div class="site-about" style="padding:0px 0 40px;">
    <h1><?= Html::encode($this->title) ?></h1>
<div class="container">
    <div class="row">        
        <div class="col-sm-9">

		    <p><?= \Yii::t('app', 'Spread throughout the building that composes the Hotel Leopold I at the top of the 17th century magnificent Petrovaradin Fortress, each of our 32 guestrooms and suites welcomes guests to sumptuous, elegant surroundings that reflect the rich cultural heritage of Novi Sad.') ?></p>

			<p><?= \Yii::t('app', 'Choose your preferred accommodation from our selection of guestrooms and suites below, many of which feature views that extend out over Novi Sad and the Danube River for a unique experience.') ?></p>

			<p><?= \Yii::t('app', 'On the right bank of the Danube, Petrovaradin Fortress is only few steps away from Hotel Leopold I. On the left bank, Republic Square and the Orthodox Cathedral of Saint George can be reached within a 15-minute walk.') ?></p>

			<p><?= \Yii::t('app', 'Style. Glamour. Sophistication. Whether it\'s an exclusive product launch, an elegant gala dinner, a private meeting of the board, a corporate incentive, a quick working lunch or a personal occasion to celebrate, your special event at Hotel Leopold I will be an experience to remember.') ?></p>

			<p><?= \Yii::t('app', 'From the Baroque-inspired Congress Hall to the warm intimacy of the Board Room, Hotel Leopold I proposes a range of elegantly appointed meeting and reception venues for up to 60 participants, each supported by contemporary technological equipment and personalised banqueting services. An expert team of meeting co-ordinators is ready to assist you with all your professional needs and to ensure the success of your events.') ?></p>
		</div>
		<div class="col-sm-3">
             <?= Html::img('@web/images/home/grb.png', ['style'=>'width:100%; opacity:.5']) ?>
        </div>
	</div>
</div>
</div>
