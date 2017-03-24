<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="col-sm-4 isotopeSelector <?= $model->hotel_dept ?>">
  <article>
    <figure>
      <img src="/images/room/<?= $model->id ?>_1.jpg" alt="" style="height: 212px;">
      <h4><?= Html::a($model->tName, Url::to(['view', 'id'=>$model->id]), ['class'=>'']) ?></h4>
      <div class="overlay-background">
        <div class="inner"></div>
      </div>
      <div class="overlay">
        <?= Html::a(
          '<div class="overlayInfo">
            <h5>'.\Yii::t('app', 'from').' <span>'.$model->fullPrice.'</span></h5>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>31 Mar, 2017</p>
          </div>'
          , Url::to(['view', 'id'=>$model->id]), ['class'=>'fancybox-pop']) ?>
      </div>
    </figure>
  </article>
</div>