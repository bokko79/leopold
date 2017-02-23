<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\components\languageSwitcher;

AppAsset::register($this);
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
<body>
<?php $this->beginBody() ?>


    <header>
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('/images/home/logo.png', ['style'=>'width:150px;']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-inverse navbar-main',
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
              ['label' => \Yii::t('app', 'Gym'), 'url' => ['/site/spa']],
              ['label' => \Yii::t('app', 'Congress Hall'), 'url' => ['/site/hall']],
              ['label' => \Yii::t('app', 'Board Room'), 'url' => ['/site/hall']],
          ],
        ],
        ['label' => \Yii::t('app', 'Offers'), 'url' => ['/offers/index']],
        ['label' => \Yii::t('app', 'About'), 'url' => ['/site/about']],
        ['label' => \Yii::t('app', 'Contact'), 'url' => ['/site/contact']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?> 
    <?= languageSwitcher::Widget() ?>
    </header>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>       
        
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

<?= $this->render('partial/footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
