<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
  <!-- PAGE CONTENT -->
  <section class="notFoundContent">
    <img src="/images/home/not-found.png" alt="">    
    <h4><?= \Yii::t('app', 'Oops! The page you are looking for could not be found!') ?></h4>
    <p><?= Html::encode($this->title) ?></p>
    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>
    <p>        
        <?= \Yii::t('app', 'The above error occurred while the Web server was processing your request.') ?>
    </p>
    <p>
        <?= \Yii::t('app', 'Please contact us if you think this is a server error. Thank you.') ?>        
    </p>
    <?= Html::a(\Yii::t('app', 'Go back'), ['/site/index'], ['class' => 'btn btn-warning']) ?>
  </section>