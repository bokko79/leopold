<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RoomReviews */

$this->title = 'Update Room Reviews: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Room Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-reviews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
