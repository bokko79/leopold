<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RoomReviews */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Room Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-reviews-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'room_id',
            'guest_name',
            'guest_country',
            'review_text:ntext',
            'time',
        ],
    ]) ?>

</div>
