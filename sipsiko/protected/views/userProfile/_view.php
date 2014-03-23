<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
    <?php echo CHtml::encode($data->first_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
    <?php echo CHtml::encode($data->last_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
    <?php echo CHtml::encode($data->phone); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
    <?php echo CHtml::encode($data->photo); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
      <?php echo CHtml::encode($data->user_id); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('role_id')); ?>:</b>
      <?php echo CHtml::encode($data->role_id); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
      <?php echo CHtml::encode($data->created_at); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
      <?php echo CHtml::encode($data->updated_at); ?>
      <br />

     */ ?>

</div>