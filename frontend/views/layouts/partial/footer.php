<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- FOOTER -->
<footer style="">
  <div class="clearfix" style="">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div class="footerContent">
            <a href="/" class="footer-logo logo-image"><img src="/images/home/logo.png" alt="Leopold logo"></a>
            <p>Situated on the Danube riverbank and just 200 metres from the Varadin Bridge, Hotel Leopold I offers luxurious accommodation in a Baroque building with views on the Danube and Novi Sad.</p>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="footerContent">
            <h5><?= \Yii::t('app', 'Contact Us') ?></h5>
            <ul class="list-unstyled">
              <li><i class="fa fa-home" aria-hidden="true"></i>Petrovaradinska tvrđava, Petrovaradin/Novi Sad, Srbija</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>+381 21 488 7878</li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailTo:office@leopoldns.com">office@leopoldns.com</a></li>
            </ul>
            <ul class="list-inline" style="margin-top:15px;">
              <li><?= Html::a('<i class="fa fa-envelope-o" aria-hidden="true"></i>', ['/site/contact'], ['class'=>'']) ?></li>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="footerContent">
            <h5>Newsletter</h5>
            <p>Get on out mailing list and find out about our hot packages first!.</p>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter your email" aria-describedby="basic-addon21">
              <span class="input-group-addon" id="basic-addon21"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="copyRight">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyRightText">
              <p style="text-align:center;">Copyright © <?= date("Y"); ?>. All Rights Reserved by <?= Html::a('Masterplan ARC', Url::to('http://www.masterplan.rs/'), ['class'=>'', 'target'=>'_blank']) ?>.
                  <span style="padding: 0 10px">|</span>
                  <?= \Yii::t('app', 'We accept') ?>:  
                  <i class="fa fa-cc-visa" aria-hidden="true"></i> Visa 
                  <i class="fa fa-cc-mastercard" aria-hidden="true"></i> MasterCard
                  <i class="fa fa-cc-amex" aria-hidden="true"></i> American Express.
                  <span style="padding: 0 10px">|</span>
                  <?= Html::a(\Yii::t('app', 'Privacy Policy'), ['/site/policy'], ['class'=>'']) ?><span style="padding: 0 10px">|</span>
                  <?= Html::a(\Yii::t('app', 'About'), ['/site/about'], ['class'=>'']) ?><span style="padding: 0 10px">|</span>
                  <?= Html::a(\Yii::t('app', 'Offers'), ['/offers/index'], ['class'=>'']) ?>
            
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>