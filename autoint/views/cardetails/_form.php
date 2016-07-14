<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cardetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cardetails-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Upload Photos
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <div class="col-md-4">

                    <?= $form->field($model, 'images[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
                    </div>
                <div class="col-md-4">
              </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Car Information
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <div class="col-md-4">
                    <?= $form->field($model, 'reg_year')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'reg_number')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'mileage')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'body_type')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'model_year')->textInput(['maxlength' => true]) ?>
                </div>
              </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Car Features
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <div class="col-md-4">
                    <?= $form->field($model, 'engine_size')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'engine_type')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'trans')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'fuel_type')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'body_style')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'driveline')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'fuel_economy')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'anti_brake_system')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'front_brake_type')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'turning_diameter')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'rear_suspension')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'rear_spring_type')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'standard_seating')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'chassis')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'steering')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'doors')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'dimension')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'max_load')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="row">
        
            
        
    </div>
    <div class="row">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
