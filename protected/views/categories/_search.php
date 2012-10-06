<?php
/* @var $this CategoriesController */
/* @var $model Categories */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DomainId'); ?>
		<?php echo $form->textField($model,'DomainId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ParentId'); ?>
		<?php echo $form->textField($model,'ParentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SiteComponentId'); ?>
		<?php echo $form->textField($model,'SiteComponentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Periority'); ?>
		<?php echo $form->textField($model,'Periority'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'URLAlias'); ?>
		<?php echo $form->textField($model,'URLAlias',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StatusId'); ?>
		<?php echo $form->textField($model,'StatusId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ImageId'); ?>
		<?php echo $form->textField($model,'ImageId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Params'); ?>
		<?php echo $form->textField($model,'Params',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->