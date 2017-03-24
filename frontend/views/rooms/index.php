<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel common\models\RoomsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t('app', 'Our Rooms and Accommodation');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maincontain" style="">    
    <div class="container inverted">
        <div class="row">
            <div class="col-xs-12">
                <?= Html::img('@web/images/home/grb.png', ['style'=>'width:13%; opacity:1; -webkit-filter: invert(10%) drop-shadow(2px 2px 1px #111); filter: invert(10%) drop-shadow(4px 4px 4px #000);']) ?>
                <h1 class=""><?= Html::encode($this->title) ?></h1>
                <p class="crimson"><?= \Yii::t('app', 'Spread throughout the building that composes the Hotel Leopold I at the top of the 17th century magnificent Petrovaradin Fortress, each of our 32 guestrooms and suites welcomes guests to sumptuous, elegant surroundings that reflect the rich cultural heritage of Novi Sad.') ?></p>
            </div>
        </div>
    </div>


    <!-- SEARCH TOUR -->
    <?php /*<section class="darkSection" style="background: none !important;">
      <div class="container">
        <div class="row gridResize">
          <div class="col-sm-3 col-xs-12">
            <div class="sectionTitleDouble">
              <p>Book</p>
              <h2>your <span>room</span></h2>
            </div>
          </div>
          <div class="col-sm-7 col-xs-12">
            <div class="row">
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">Destinations</option>
                    <option value="1">USA</option>
                    <option value="2">UK</option>
                    <option value="3">Canada</option>            
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">Destinations</option>
                    <option value="1">USA</option>
                    <option value="2">UK</option>
                    <option value="3">Canada</option>            
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">Destinations</option>
                    <option value="1">USA</option>
                    <option value="2">UK</option>
                    <option value="3">Canada</option>            
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <option value="0">$1000 - $2000</option>
                    <option value="1">$1400 - $2000</option>
                    <option value="2">$1600 - $2000</option>
                    <option value="3">$1800 - $2000</option>            
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2 col-xs-12">
            <a href="#" class="btn btn-block buttonCustomPrimary">Search</a>
          </div>
        </div>
      </div>
    </section> */ ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="filter-container isotopeFilters" style="padding: 40px 0 20px; text-align: center; border-top: 1px solid #daa520;">
                    <ul class="list-inline filter">
                        <li class="active"><a href="#" data-filter="*"><?= \Yii::t('app', 'All Rooms') ?></a></li> <i class="fa fa-arrow-circle-right fa-2x"></i>
                        <li><a href="#" data-filter=".leopold"><?= \Yii::t('app', 'Hotel Leopold I') ?></a></li>
                        <i class="fa fa-plus fa-2x"></i>
                        <li><a href="#" data-filter=".garni"><?= \Yii::t('app', 'Garni Hotel') ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="maincont" style="background: #eee; padding: 40px; border-top: 1px solid #aaa;">
    <div class="container">
        <div class="row isotopeContainer">
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item_isotope',
                'summary'=>'',
            ]) ?>
        </div>
    </div>
</div>