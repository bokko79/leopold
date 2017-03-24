<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\widgets\ActiveForm;
?>
<!-- FOOTER -->
<footer style="">
  <div class="clearfix" style="">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="footerContent">
            <a href="/" class="footer-logo logo-image"><img src="/images/home/logo.png" alt="Leopold logo"></a>
            <p><?= \Yii::t('app', 'Situated on the Danube riverbank and just 200 metres from the Varadin Bridge, Hotel Leopold I offers luxurious accommodation in a Baroque building with views on the Danube and Novi Sad.') ?></p>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="footerContent">
            <h5><?= \Yii::t('app', 'Contact Us') ?></h5>
            <ul class="list-unstyled">
              <li><i class="fa fa-home" aria-hidden="true"></i><?= \Yii::t('app', 'Petrovaradin Fortress') ?>, Petrovaradin/Novi Sad, Srbija</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>+381 21 488 7878</li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailTo:office@leopoldns.com">office@leopoldns.com</a></li>
            </ul>
            <ul class="list-inline" style="margin-top:15px;">
              <li><?= Html::a('<i class="fa fa-envelope-o" aria-hidden="true"></i>', ['/site/contact'], ['class'=>'']) ?></li>
              <li><a href="https://www.facebook.com/hotel.leopold/?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/search?src=typd&q=leopold%20hotel%20novi%20sad" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://www.tripadvisor.rs/Hotel_Review-g1983703-d2093400-Reviews-Hotel_Leopold_I-Petrovaradin_Novi_Sad_Vojvodina.html" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/hotel.leopold/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="footerContent">
            <h5><?= \Yii::t('app', 'Newsletter') ?></h5>
            <p><?= \Yii::t('app', 'Get on out mailing list and find out about our hot packages first!') ?></p>
            <?= Html::beginForm(['/site/index'], 'post', []) ?>
            <div class="input-group">
                <?= Html::input('email', 'newsletter', '', ['class' => 'form-control' , 'placeholder'=>"Enter your email", 'style'=>'width:215px;']) ?>
             
              <?= Html::submitButton('<i class="fa fa-arrow-circle-right"></i>', ['class' => 'btn buttonTransparent']) ?>
            </div>
                
         
            <?php Html::endForm() ?>
          </div>
        </div>
      </div>
    </div>
  
    <div class="copyRight">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyRightText">
              <p style="text-align:center;"><?= \Yii::t('app', 'Copyright') ?> © <?= date("Y"); ?>. <?= \Yii::t('app', 'All Rights Reserved by') ?> <?= Html::a('Masterplan ARC', Url::to('http://www.masterplan.rs/'), ['class'=>'', 'target'=>'_blank']) ?>.
                  <span style="padding: 0 10px">|</span>
                  <?= \Yii::t('app', 'We accept') ?>:  
                  <i class="fa fa-cc-visa" aria-hidden="true"></i> Visa 
                  <i class="fa fa-cc-mastercard" aria-hidden="true"></i> MasterCard
                  <i class="fa fa-cc-amex" aria-hidden="true"></i> American Express.
                  <span style="padding: 0 10px">|</span>
                  <?= Html::a(\Yii::t('app', 'Privacy Policy'), ['/site/policy'], ['class'=>'']) ?><span style="padding: 0 10px">|</span>
                  <?= Html::a(\Yii::t('app', 'About'), ['/site/about'], ['class'=>'']) ?><span style="padding: 0 10px">|</span>
                  <?= Html::a(\Yii::t('app', 'Accomodation'), ['/rooms/index'], ['class'=>'']) ?>
            
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>