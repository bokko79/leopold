<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RoomReviews */

$this->title = 'Create Room Reviews';
$this->params['breadcrumbs'][] = ['label' => 'Room Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-reviews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
