<?php
/* @var $this CategoriesController */
/* @var $model Categories */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categories-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DomainId'); ?>
		<?php echo $form->textField($model,'DomainId'); ?>
		<?php echo $form->error($model,'DomainId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ParentId'); ?>
		<?php echo $form->textField($model,'ParentId'); ?>
		<?php echo $form->error($model,'ParentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SiteComponentId'); ?>
		<?php echo $form->textField($model,'SiteComponentId'); ?>
		<?php echo $form->error($model,'SiteComponentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Periority'); ?>
		<?php echo $form->textField($model,'Periority'); ?>
		<?php echo $form->error($model,'Periority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'URLAlias'); ?>
		<?php echo $form->textField($model,'URLAlias',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'URLAlias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StatusId'); ?>
		<?php echo $form->textField($model,'StatusId'); ?>
		<?php echo $form->error($model,'StatusId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImageId'); ?>
		<?php echo $form->textField($model,'ImageId'); ?>
		<?php echo $form->error($model,'ImageId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Params'); ?>
		<?php echo $form->textField($model,'Params',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'Params'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->