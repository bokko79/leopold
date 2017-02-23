<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;

$asset = AppAsset::register($this);
$baseUrl = $asset->baseUrl;
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

  <div class="main-wrapper">

    <!-- HEADER -->
    <header>
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('/images/home/logo.png', ['style'=>'width:150px;']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default navbar-main navbar-fixed-top',
            'role' => 'navigation',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index'], ['class'=>'singleDrop']],
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
    
    <?= $content ?>
    
    <?= $this->render('partial/footer.php') ?>
  </div>  

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>