<?php
$this->breadcrumbs=array(
	'Variable Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VariableDetail', 'url'=>array('index')),
	array('label'=>'Create VariableDetail', 'url'=>array('create')),
	array('label'=>'Update VariableDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VariableDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VariableDetail', 'url'=>array('admin')),
);
?>

<h1>View VariableDetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'status',
		'user_id',
		'variable_id',
		'created_at',
		'updated_at',
	),
)); ?>
