<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RoomFeatures */

$this->title = 'Setup Features for Room: '. $room->name;
$this->params['breadcrumbs'][] = ['label' => 'Room Features', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-features-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'room' => $room,
    ]) ?>

</div>
