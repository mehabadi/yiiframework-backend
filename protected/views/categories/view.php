<?php
/* @var $this CategoriesController */
/* @var $model Categories */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Categories', 'url'=>array('index')),
	array('label'=>'Create Categories', 'url'=>array('create')),
	array('label'=>'Update Categories', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Categories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categories', 'url'=>array('admin')),
);
?>

<h1>View Categories #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'DomainId',
		'ParentId',
		'SiteComponentId',
		'Periority',
		'Title',
		'URLAlias',
		'StatusId',
		'ImageId',
		'Params',
		'Description',
	),
)); ?>
