<?php
$this->breadcrumbs=array(
	'Expenses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Expense', 'url'=>array('index')),
	array('label'=>'Manage Expense', 'url'=>array('admin')),
);
?>

<h1>Create Expense</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>