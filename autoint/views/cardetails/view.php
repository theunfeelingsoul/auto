<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cardetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cardetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cardetails-view">

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
            'reg_year',
            'reg_number',
            'mileage',
            'body_type',
            'model_year',
            'engine_size',
            'engine_type',
            'trans',
            'fuel_type',
            'body_style',
            'driveline',
            'fuel_economy',
            'anti_brake_system',
            'front_brake_type',
            'turning_diameter',
            'rear_suspension',
            'rear_spring_type',
            'standard_seating',
            'chassis',
            'location',
            'steering',
            'doors',
            'dimension',
            'weight',
            'max_load',
            'color',
            'model',
            'manufacturer',
            'images:ntext',
        ],
    ]) ?>

</div>
