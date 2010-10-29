<?php
$this->breadcrumbs=array(
	'Categories',
);

$this->menu=array(
	array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>Categories</h1>

<h2>Total Expense Cost: <?= Category::model()->getTotalExpenseCost($dataProvider) ?></h2>

<table cellpadding="6" cellspacing="1">
    <tr>
        <th>Name</th>
        <th>Total Cost</th>
    </tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>