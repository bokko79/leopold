<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Rooms */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$formatter = \Yii::$app->formatter;
?>

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

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'floor',
                    'number',
                    'type',
                    'price',
                    'is_available',
                    'file_id',
                    'available_from',
                    'update_time',
                ],
            ]) ?>
        </div>
        <div class="col-sm-6 column2">
            <h3>Features</h3>
                <?= Html::a('Room Features', ['room-features/create', 'room' => $model->id], ['class' => 'btn btn-warning']) ?><br>
                <?php if ($features = $model->roomFeatures){
                foreach($features as $feature){
                    echo $feature->feature->falg. ' '.$feature->feature->name.'<br>';
                }
            } ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Translations</h3>
            <?= Html::a('New language', Url::to(['/rooms/translate', 'id'=>$model->id]), ['class' => 'btn btn-info']) ?>
                <?php if ($trans = $model->translations){
                    foreach($trans as $tran){
                        echo '<h4>'.$tran->language->name.' '. Html::a('update', Url::to(['/rooms/update-translate', 'id'=>$tran->id]), ['class' => 'btn btn-link']). '</h4>';
                        echo '<p>name: '.$tran->name.'</p>';
                        echo '<p>text: '.$tran->text.'</p>';
                    }
                } ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Reviews</h3>
            <?= Html::a('New review', Url::to(['/room-reviews/create', 'room'=>$model->id]), ['class' => 'btn btn-info']) ?>
                <?php if ($reviews = $model->roomReviews){
                    foreach($reviews as $review){
                        echo '<p>'.$review->review_text.' '. Html::a('update', Url::to(['/room-reviews/update', 'id'=>$review->id])). '</h4>';
                        echo '<p>name: '.$review->guest_name.'</p>';
                        echo '<p>country: '.$review->guest_country.'</p>';
                        echo '<p>date: '.$formatter->asDate($review->time, 'long').'</p>';
                    }
                } ?>
        </div>
    </div>
</div>
