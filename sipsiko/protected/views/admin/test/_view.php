<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('slug')); ?>:</b>
    <?php echo CHtml::encode($data->slug); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
    <?php echo CHtml::encode($data->duration); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
    <?php echo CHtml::encode($data->start_date); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
    <?php echo CHtml::encode($data->end_date); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('is_public')); ?>:</b>
      <?php echo CHtml::encode($data->is_public); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
      <?php echo CHtml::encode($data->status); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('user_profile_id')); ?>:</b>
      <?php echo CHtml::encode($data->user_profile_id); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
      <?php echo CHtml::encode($data->type_id); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
      <?php echo CHtml::encode($data->parent_id); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
      <?php echo CHtml::encode($data->created_at); ?>
      <br />

      <b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
      <?php echo CHtml::encode($data->updated_at); ?>
      <br />

     */ ?>

</div>