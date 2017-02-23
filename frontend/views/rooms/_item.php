<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="col-sm-4 col-xs-12">
  <div class="thumbnail deals">
    <img src="/images/home/deal-01.jpg" alt="deal-image">
    <a href="single-package-right-sidebar.html" class="pageLink"></a>
    <div class="discountInfo">
      <div class="discountOffer">
        <h4>
          50% OFF<!--span>OFF</span>-->
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
        <li>7 days</li>
        <li>Min stay: 1</li>
        <li>Min persons: 1</li>
      </ul>
    </div>
    <div class="caption">
      <h4><a href="single-package-right-sidebar.html" class="captionTitle"><?= Html::a($model->name, Url::to(['view', 'id'=>$model->id]), ['class'=>'']) ?></a></h4>
      <p><?= $model->description ?></p>
      <div class="detailsInfo">
        <h5>
          <span>Start From</span>
          €<?= $model->price ?>
        </h5>
        <ul class="list-inline detailsBtn">
          <li><?= Html::a('Details', Url::to(['view', 'id'=>$model->id]), ['class'=>'btn buttonTransparent']) ?></li>
          <li><?= Html::a('Book now', Url::to(), ['class'=>'btn buttonTransparent']) ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>