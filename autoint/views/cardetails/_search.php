<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CardetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cardetails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'reg_year') ?>

    <?= $form->field($model, 'reg_number') ?>

    <?= $form->field($model, 'mileage') ?>

    <?= $form->field($model, 'body_type') ?>

    <?php // echo $form->field($model, 'model_year') ?>

    <?php // echo $form->field($model, 'engine_size') ?>

    <?php // echo $form->field($model, 'engine_type') ?>

    <?php // echo $form->field($model, 'trans') ?>

    <?php // echo $form->field($model, 'fuel_type') ?>

    <?php // echo $form->field($model, 'body_style') ?>

    <?php // echo $form->field($model, 'driveline') ?>

    <?php // echo $form->field($model, 'fuel_economy') ?>

    <?php // echo $form->field($model, 'anti_brake_system') ?>

    <?php // echo $form->field($model, 'front_brake_type') ?>

    <?php // echo $form->field($model, 'turning_diameter') ?>

    <?php // echo $form->field($model, 'rear_suspension') ?>

    <?php // echo $form->field($model, 'rear_spring_type') ?>

    <?php // echo $form->field($model, 'standard_seating') ?>

    <?php // echo $form->field($model, 'chassis') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'steering') ?>

    <?php // echo $form->field($model, 'doors') ?>

    <?php // echo $form->field($model, 'dimension') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'max_load') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'manufacturer') ?>

    <?php // echo $form->field($model, 'images') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
