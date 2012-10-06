<?php
/* @var $this CategoriesController */
/* @var $data Categories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DomainId')); ?>:</b>
	<?php echo CHtml::encode($data->DomainId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ParentId')); ?>:</b>
	<?php echo CHtml::encode($data->ParentId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SiteComponentId')); ?>:</b>
	<?php echo CHtml::encode($data->SiteComponentId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Periority')); ?>:</b>
	<?php echo CHtml::encode($data->Periority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('URLAlias')); ?>:</b>
	<?php echo CHtml::encode($data->URLAlias); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusId')); ?>:</b>
	<?php echo CHtml::encode($data->StatusId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImageId')); ?>:</b>
	<?php echo CHtml::encode($data->ImageId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Params')); ?>:</b>
	<?php echo CHtml::encode($data->Params); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	*/ ?>

</div>