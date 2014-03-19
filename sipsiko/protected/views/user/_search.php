<div class="wide form">

  <?php
  $form = $this->beginWidget('CActiveForm', array(
      'action' => Yii::app()->createUrl($this->route),
      'method' => 'get',
  ));
  ?>

  <div class="row">
    <?php echo $form->label($model, 'id'); ?>
    <?php echo $form->textField($model, 'id'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'username'); ?>
    <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'first_name'); ?>
    <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'last_name'); ?>
    <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'email'); ?>
    <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'address'); ?>
    <?php echo $form->textArea($model, 'address', array('rows' => 6, 'cols' => 50)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'phone'); ?>
    <?php echo $form->textField($model, 'phone', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'photo'); ?>
    <?php echo $form->textArea($model, 'photo', array('rows' => 6, 'cols' => 50)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'status'); ?>
    <?php echo $form->textField($model, 'status', array('size' => 60, 'maxlength' => 255)); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'parent_id'); ?>
    <?php echo $form->textField($model, 'parent_id'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'created_at'); ?>
    <?php echo $form->textField($model, 'created_at'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model, 'updated_at'); ?>
    <?php echo $form->textField($model, 'updated_at'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
  </div>

  <?php $this->endWidget(); ?>

</div><!-- search-form -->