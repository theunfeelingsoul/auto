<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CardetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cardetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cardetails-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cardetails', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'reg_year',
            'reg_number',
            'mileage',
            'body_type',
            // 'model_year',
            // 'engine_size',
            // 'engine_type',
            // 'trans',
            // 'fuel_type',
            // 'body_style',
            // 'driveline',
            // 'fuel_economy',
            // 'anti_brake_system',
            // 'front_brake_type',
            // 'turning_diameter',
            // 'rear_suspension',
            // 'rear_spring_type',
            // 'standard_seating',
            // 'chassis',
            // 'location',
            // 'steering',
            // 'doors',
            // 'dimension',
            // 'weight',
            // 'max_load',
            // 'color',
            // 'model',
            // 'manufacturer',
            // 'images:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
