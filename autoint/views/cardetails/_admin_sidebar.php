<?php use yii\helpers\Html; ?>
<div class="list-group">
  <!-- <a href="#" class="list-group-item active">
    New Car
  </a> -->
  <?php echo Html::a('New car', ['cardetails/index'], ['class' => 'list-group-item active']) ?>

  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>