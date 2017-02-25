<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\FeatureAsset;
use frontend\assets\SphereViewerAsset;

FeatureAsset::register($this);
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/f6ceb1ff95.js"></script>
    <?php $this->head() ?>
</head>
<body class="changeHeader">
<?php $this->beginBody() ?>

<?= $this->render('partial/navbar.php') ?>

<div id="containerfeature" class="<?= $this->params['model'] ?>"></div>

<?= $content ?>    

<?= $this->render('partial/footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>