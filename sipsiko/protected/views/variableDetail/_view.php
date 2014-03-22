<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
    <?php echo CHtml::encode($data->description); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode($data->status); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('user_profile_id')); ?>:</b>
    <?php echo CHtml::encode($data->user_profile_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('variable_id')); ?>:</b>
    <?php echo CHtml::encode($data->variable_id); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
    <?php echo CHtml::encode($data->created_at); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
    <?php echo CHtml::encode($data->updated_at); ?>
    <br />


</div>