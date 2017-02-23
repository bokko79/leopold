<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel common\models\RoomsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \Yii::t('app', 'Rooms');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rooms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(); ?>    <?php /* GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'floor',
            'number',
            'type',
            // 'price',
            // 'is_available',
            // 'file_id',
            // 'available_from',
            // 'update_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */ ?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_item',
]) ?>
<?php Pjax::end(); ?></div>
