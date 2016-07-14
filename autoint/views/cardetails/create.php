<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cardetails */

$this->title = 'Create Cardetails';
$this->params['breadcrumbs'][] = ['label' => 'Cardetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cardetails-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
