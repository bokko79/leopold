<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\components\languageSwitcher;

$language = \common\models\Languages::find()->where('code="'.Yii::$app->language.'"')->one();
?>
<!-- HEADER -->
<header>
<?php
    NavBar::begin([
        'brandLabel' => Html::img('/images/home/leopold-logo-white.png', ['class'=>'logo-image']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-main navbar-default navbar-fixed-top',
            'role' => 'navigation',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index'], ['class'=>'singleDrop']],
        ['label' => \Yii::t('app', 'Accomodation'), 'url' => ['/rooms/index']],
        ['label' => \Yii::t('app', 'Features'),
          'items' => [
              ['label' => \Yii::t('app', 'Restaurant'), 'url' => ['/site/restaurant']],
              ['label' => \Yii::t('app', 'Wellness & Spa'), 'url' => ['/site/spa']],
              ['label' => \Yii::t('app', 'Fitness'), 'url' => ['/site/gym']],
              ['label' => \Yii::t('app', 'Congress Hall'), 'url' => ['/site/hall']],
              ['label' => \Yii::t('app', 'Board Room'), 'url' => ['/site/banquet']],
          ],
        ],
        //['label' => \Yii::t('app', 'Offers'), 'url' => ['/offers/index']],
        ['label' => \Yii::t('app', 'About'), 'url' => ['/site/about']],
        ['label' => \Yii::t('app', 'Contact'), 'url' => ['/site/contact']],
        ['label' => $language->short_code,
          'items' => languageSwitcher::widget()
        ],

    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end(); ?>
</header>