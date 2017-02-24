<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\RoomAsset;
use frontend\assets\SphereViewerAsset;

RoomAsset::register($this);
SphereViewerAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <script src="https://use.fontawesome.com/f6ceb1ff95.js"></script>
    <?php $this->head() ?>
</head>
<body class="changeHeader">
<?php $this->beginBody() ?>

<!-- HEADER -->
<header>
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('/images/home/logo.png', ['style'=>'width:150px;']),
        //'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-main fadeIn animated',
            'role' => 'navigation',
            'style' => 'text-shadow:1px 1px #000;',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/'], ['class'=>'singleDrop']],
        ['label' => 'Accomodation', 'url' => ['/rooms/index']],
        ['label' => 'Features',
          'items' => [
              ['label' => 'Restaurant', 'url' => ['/site/restaurant']],
              ['label' => 'Wellness & Spa', 'url' => ['/site/spa']],
              ['label' => 'Gym', 'url' => ['/site/spa']],
              ['label' => 'Congress Hall', 'url' => ['/site/hall']],
              ['label' => 'Board Room', 'url' => ['/site/hall']],
          ],
        ],
        ['label' => 'Offers', 'url' => ['/offers/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?> 
</header>
<div id="containerp" style="height:480px; /*position: absolute;*/margin: -117px 0 20px;" class="<?= $this->params['model'] ?>"></div>
<div class="container">
    <?= $content ?>
</div>   
    
    <?= $this->render('partial/footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>