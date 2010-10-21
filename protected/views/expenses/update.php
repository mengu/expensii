<?php
$this->breadcrumbs=array(
	'Expenses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Expense', 'url'=>array('index')),
	array('label'=>'Create Expense', 'url'=>array('create')),
	array('label'=>'View Expense', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Expense', 'url'=>array('admin')),
);
?>

<h1>Update Expense <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>