<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */

/* @var $this yii\web\View */

$this->title = 'Hotel Leopold I';
?>

    <!-- BANNER -->
    <section class="bannercontainer">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>            
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="/images/home/slider-05.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  <?= \Yii::t('app', 'WELCOME TO Hotel') ?>
                  <span>LEOPOLD I ****</span>
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <?= \Yii::t('app', 'Spread throughout the building that composes the Hotel Leopold I at the top of the 17th century magnificent Petrovaradin Fortress, each of our 32 guestrooms and suites welcomes guests to sumptuous, elegant surroundings that reflect the rich cultural heritage of Novi Sad.') ?>                  
                </div>
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><?= Html::a('Book now', Url::to(['/rooms/index']), ['class'=>'btn buttonCustomPrimary']) ?></span>
                </div>
              </div>
            </li>
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="/images/home/slider-06.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  <?= \Yii::t('app', 'Feel The History') ?>
                  <span><?= \Yii::t('app', 'Fortress') ?></span>
                </div>
                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <?= \Yii::t('app', 'With sweeping views over Novi Sad and the Danube River, HOTEL LEOPOLD I, enjoys a location rich in history, on the top of the 17th century magnificent Petrovaradin Fortress and just moments from the centre of Novi Sad.') ?>                  
                </div>
                <div class="tp-caption rs-caption-3 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><?= Html::a('Read More', Url::to(['/site/about']), ['class'=>'btn buttonCustomPrimary']) ?></span>
                </div>
              </div>
            </li>
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="/images/home/slider-07.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  <?= \Yii::t('app', 'Enjoy Ultimate Freedom') ?>                  
                  <span><?= \Yii::t('app', 'Accomodation') ?></span>
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <?= \Yii::t('app', 'Spread throughout the building that compose the Hotel Leopold I at the top of the 17th century magnificent Petrovaradin Fortress, each of our 31 guestrooms and suites welcomes guests to sumptuous, elegant surroundings that reflect the rich cultural heritage of Novi Sad.') ?>
                  <?= \Yii::t('app', 'Choose your preferred accommodation from our selection of guestrooms and suites below, many of which feature views that extend out over Novi Sad and the Danube River for a unique experience.') ?>
                </div>
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><?= Html::a('Book now', Url::to(['/rooms/index']), ['class'=>'btn buttonCustomPrimary']) ?></span>
                </div>
              </div>
            </li>
            <li data-transition="parallaxvertical" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
              <img src="/images/home/slider-08.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="270"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  <?= \Yii::t('app', 'Feel like at home') ?>
                  <span><?= \Yii::t('app', '24/7 Quick Support') ?></span>
                </div>
                <div class="tp-caption rs-caption-2 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="400"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <?= \Yii::t('app', 'Hotel Leopold I offers all its guests a well equipped Wellness & Fitness Centre, an ideal place to find the right balance after a hard day’s work or an excursion.The Wellness Centre includes a Jacuzzi area, a Finnish sauna, Salt room, a relaxation area with comfortable chaise longue and a fitness area with Technogym equipment and views over Novi Sad and the Danube River.') ?> 
                  <?= \Yii::t('app', 'Pamper yourself and choose between an aesthetic treatment or a massage for face, hands, feet and body upon reservation.') ?>
                </div>
                <div class="tp-caption rs-caption-3 sft text-center"
                  data-hoffset="0"
                  data-x="center"
                  data-y="485"
                  data-speed="800"
                  data-start="2000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  <span class="page-scroll"><?= Html::a('View Details', Url::to(['/site/about']), ['class'=>'btn buttonCustomPrimary']) ?></span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- SEARCH TOUR -->
    <section class="darkSection">
      <div class="container">
        <div class="row gridResize">
          <div class="col-sm-3 col-xs-12">
            <div class="sectionTitleDouble">
              <p><?= \Yii::t('app', 'Search') ?></p>
              <h2><?= \Yii::t('app', 'your') ?> <span><?= \Yii::t('app', 'rooms') ?></span></h2>
            </div>
          </div>
          <div class="col-sm-7 col-xs-12">
            <div class="row">
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">Superior Room</option>          
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">RiverView</option>         
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id2" id="guiest_id2" class="select-drop">
                    <option value="0">RiverView</option>                          
                  </select>
                </div>
              </div>
              <div class="col-sm-3 col-xs-12">
                <div class="searchTour">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <option value="0">€50 - €100</option>         
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2 col-xs-12">
            <a href="#" class="btn btn-block buttonCustomPrimary"><?= \Yii::t('app', 'Search') ?></a>
          </div>
        </div>
      </div>
    </section>    

    <!-- PROMOTION PARALLAX -->
    <section class="promotionWrapper">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="promotionTable">
              <div class="promotionTableInner">
                <div class="promotionInfo">
                  <span><?= \Yii::t('app', 'Weekend Getaway Package') ?></span>
                  <h2><?= \Yii::t('app', 'Petrovaradin Fortress Tour') ?></h2>
                  <ul class="list-inline rating">
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  </ul>
                  <p>€599 <?= \Yii::t('app', 'per person - 5 nights') ?></p>
                  <?= Html::a(\Yii::t('app', 'View Details'), Url::to(['/rooms/index']), ['class'=>'btn buttonTransparent']) ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TOP OFFER -->
    <section class="mainContentSection packagesSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="sectionTitle">
              <h2><span class="lightBg"><?= \Yii::t('app', 'Our Top Offers') ?></span></h2>
              <p><?= \Yii::t('app', 'These are our special packages available all around the year!') ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="/images/room/11_1.jpg" alt="deal-image">              
              <div class="discountInfo">
                <div class="discountOffer">
                  <h4>
                    <?= \Yii::t('app', 'Free') ?> <span><?= \Yii::t('app', 'Gift') ?></span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li><?php //\Yii::t('app', '7 days') ?></li>
                  <li><?= \Yii::t('app', 'Min stay') ?>: 1</li>
                  <li><?= \Yii::t('app', 'Min persons') ?>: 1</li>
                </ul>
              </div>
              <div class="caption">
                <h4><?= Html::a('Royal Suite', Url::to(['/rooms/view', 'id'=>11])) ?></h4>
                <p><?= \Yii::t('app', 'Royal Suite provides enchanting perspectives on the charm of Novi Sad and the Danube River. The suite covers 60 square meters and is truly unique in its layout and décor.') ?></p>
                <div class="detailsInfo">
                  <h5>
                    <span><?= \Yii::t('app', 'Start From') ?></span>
                    €119
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><?= Html::a('Details', Url::to(['/rooms/view', 'id'=>11]), ['class'=>'btn buttonCustomPrimary']) ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="/images/room/12_1.jpg" alt="deal-image">
              <div class="discountInfo">
                <div class="discountOffer">
                  <h4>
                    <?= \Yii::t('app', 'Free') ?> <span><?= \Yii::t('app', 'Gift') ?></span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li><?= \Yii::t('app', 'Min stay') ?>: 3</li>
                  <li><?= \Yii::t('app', 'Min persons') ?>: 1</li>
                </ul>
              </div>
              <div class="caption">
                <h4><?= Html::a('Grand Suite', Url::to(['/rooms/view', 'id'=>12])) ?></h4>
                <p><?= \Yii::t('app', 'Separated from the rest of the complex, our grandest suite will truly instigate your innermost senses of opulence, luxury and comfort.') ?></p>
                <div class="detailsInfo">
                  <h5>
                    <span><?= \Yii::t('app', 'Start From') ?></span>
                    €129
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><?= Html::a('Details', Url::to(['/rooms/view', 'id'=>12]), ['class'=>'btn buttonCustomPrimary']) ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="/images/room/13_2.jpg" alt="deal-image">
              <div class="discountInfo">
                <div class="discountOffer">
                  <h4>
                    <?= \Yii::t('app', 'Free') ?> <span><?= \Yii::t('app', 'Gift') ?></span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li><?= \Yii::t('app', 'Min stay') ?>: 2</li>
                  <li><?= \Yii::t('app', 'Min persons') ?>: 2</li>
                </ul>
              </div>
              <div class="caption">
                <h4><?= Html::a('Presidential Suite', Url::to(['/rooms/view', 'id'=>13])) ?></h4>
                <p><?= \Yii::t('app', 'At this spectacular Presidential Suite with sweeping views over Novi Sad and the Danube River you can enjoy a living space divided in seating area and a magnificent bedroom with Jacuzzi hot tub.') ?></p>
                <div class="detailsInfo">
                  <h5>
                    <span><?= \Yii::t('app', 'Start From') ?></span>
                    €159
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><?= Html::a('Details', Url::to(['/rooms/view', 'id'=>13]), ['class'=>'btn buttonCustomPrimary']) ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="btnArea">
              <?= Html::a('view all', Url::to(['/rooms/index']), ['class'=>'btn buttonTransparent']) ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* ?>

    <!-- DESTINATIONS -->
    <section class="whiteSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="sectionTitle">
              <h2><span><?= \Yii::t('app', 'Our Rooms') ?></span></h2>
              <p><?= \Yii::t('app', 'More than 50 luxury rooms and apartments') ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="media destinations">
              
                <img class="media-object" src="/images/home/destination.jpg" alt="Destination" style="width:570px; height:570px;">
              <div class="media-body">
                <h3 class="media-heading"><?= \Yii::t('app', 'Choose') ?> <br><?= \Yii::t('app', 'Your Suite') ?></h3>
                <p style="color:#aaa; margin-bottom: 60px;"><?= \Yii::t('app', 'Choose your preferred accommodation from our selection of guestrooms and suites below, many of which feature views that extend out over Novi Sad and the Danube River for a unique experience.') ?></p>
                <div class="clearfix" style="color:#aaa; margin-bottom: 60px;">

                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus"></i><?= Html::a('Superior', Url::to(['/rooms/view', 'id'=>4])) ?></li>

                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i><?= Html::a('Junior', Url::to(['/rooms/view', 'id'=>7])) ?></li>
                    
                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i><?= Html::a('Family', Url::to(['/rooms/view', 'id'=>9])) ?></li>
                   
                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i><?= Html::a('Royal', Url::to(['/rooms/view', 'id'=>11])) ?></li>
                   
                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i><?= Html::a('Grand', Url::to(['/rooms/view', 'id'=>12])) ?></li>
                   
                  </ul>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-minus" aria-hidden="true"></i><?= Html::a('Presidential', Url::to(['/rooms/view', 'id'=>13])) ?></li>
                   
                  </ul>
                </div>
                <div class="media-btn">
                  <?= Html::a(\Yii::t('app', 'View All'), Url::to(['/rooms/index']), ['class'=>'btn buttonTransparent']) ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

*/ ?>
    <!-- COUNTING PARALLAX -->
    
    <section class="countUpSection">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="text-center">
              <div class="icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="counter">51</div>
              <h5><?= \Yii::t('app', 'rooms') ?></h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="text-center">
              <div class="icon">
                <i class="fa fa-gift" aria-hidden="true"></i>
              </div>
              <div class="counter">7119</div>
              <h5><?= \Yii::t('app', 'annual stays') ?></h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="text-center">
              <div class="icon">
                <i class="fa fa-smile-o" aria-hidden="true"></i>
              </div>
              <div class="counter">4562</div>
              <h5><?= \Yii::t('app', 'happy clients') ?></h5>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="text-center">
              <div class="icon">
                <i class="fa fa-life-ring" aria-hidden="true"></i>
              </div>
              <div class="counter">24</div>
              <h5><?= \Yii::t('app', 'hours support') ?></h5>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php /* ?>    

    <!-- TOUR PACKAGES -->
    <section class="whiteSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="sectionTitle">
              <h2><span><?= \Yii::t('app', 'Our Packages') ?></span></h2>
              <p><?= \Yii::t('app', 'These are our special packages available all around the year! You can book directly on the booking window at the top of the page (scroll down after the "only room" rates) or contact us at office@leopoldns.com, +381 (0)21 488 78 78.') ?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="filter-container isotopeFilters">
              <ul class="list-inline filter">
                <li class="active"><a href="#" data-filter="*"><?= \Yii::t('app', 'All Packages') ?></a></li>
                <li><a href="#" data-filter=".business"><?= \Yii::t('app', 'Business') ?></a></li>
                <li><a href="#" data-filter=".pleasure"><?= \Yii::t('app', 'Pleasure') ?></a></li>
                <li><a href="#" data-filter=".new"><?= \Yii::t('app', 'New Year') ?></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row isotopeContainer">
            <div class="col-sm-4 isotopeSelector business">
              <article class="">
                <figure>
                  <img src="/images/home/deal-01.jpg" alt="">
                  <h4><?= \Yii::t('app', 'Business Package') ?></h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5><?= \Yii::t('app', 'from') ?> <span>€119</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>27 Jan, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector business pleasure">
              <article class="">
                <figure>
                  <img src="/images/home/deal-02.jpg" alt="">
                  <h4><?= \Yii::t('app', 'Hunters Package') ?></h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                  <a class="fancybox-pop" href="single-package-fullwidth.html">
                      <div class="overlayInfo">
                        <h5><?= \Yii::t('app', 'from') ?> <span>€299</span></h5>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>09 Feb, 2017</p>
                      </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector pleasure">
              <article class="">
                <figure>
                  <img src="/images/home/deal-03.jpg" alt="">
                  <h4><?= \Yii::t('app', 'Weekend Getaway') ?></h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5><?= \Yii::t('app', 'from') ?> <span>€119</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>14 Feb, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector pleasure">
              <article class="">
                <figure>
                  <img src="/images/home/deal-02.jpg" alt="">
                  <h4><?= \Yii::t('app', 'New Year: 1 Night Package') ?></h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5><?= \Yii::t('app', 'from') ?> <span>€225</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>11 Jan, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector pleasure new">
              <article class="">
                <figure>
                  <img src="/images/home/deal-03.jpg" alt="">
                  <h4><?= \Yii::t('app', 'New Year: 2 Nights Package') ?></h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5><?= \Yii::t('app', 'from') ?> <span>€310</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>02 Feb, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
            <div class="col-sm-4 isotopeSelector new">
              <article class="">
                <figure>
                  <img src="/images/home/deal-01.jpg" alt="">
                  <h4><?= \Yii::t('app', 'New Year: 3 Nights Package') ?></h4>
                  <div class="overlay-background">
                    <div class="inner"></div>
                  </div>
                  <div class="overlay">
                    <a class="fancybox-pop" href="single-package-fullwidth.html">
                    <div class="overlayInfo">
                      <h5><?= \Yii::t('app', 'from') ?> <span>€410</span></h5>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i>26 Feb, 2017</p>
                    </div>
                    </a>
                  </div>
                </figure>
              </article>
            </div>
        </div>
      </div>
    </section>
*/ ?>
    
