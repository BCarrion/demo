<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>
<div class="row">
	<div class="col-md-6">
		<? $form = $this->beginWidget('CActiveForm') ?>
		<div class="row">
			<? echo $form->labelEx($role, 'name') ?>
			<? echo $form->textField($role, 'name') ?>
			<? echo $form->error($role, 'name') ?>
		</div>

		<div class="row">
			<? echo $form->labelEx($role, 'description') ?>
			<? echo $form->textArea($role, 'description') ?>
			<? echo $form->error($role, 'description') ?>
		</div>

		<div class="row">
			<? echo CHtml::submitButton('Crear', array('class'=>'btn btn-info')) ?>
		</div>
		<? $this->endWidget() ?>
	</div>
	<div class="col-md-6">
		<ul class="nav nav-pills">
			<? foreach(Yii::app()->authManager->getAuthItems() as $data): ?>
			<? $enabled = Yii::app()->authManager->checkAccess($data->name, $model->id)?>
			<li>
				<h4> <? echo $data->name?>
					<small>
						<? if($data->type == 0) echo 'Rol'?>
						<? if($data->type == 1) echo 'Tarea'?>
						<? if($data->type == 2) echo 'Operacion'?>
					</small>
					<? echo CHtml::Link(($enabled?'Off':'On'), array('users/assign', 'id' => $model->id, 'item' => $data->name),array('class' =>$enabled? 'btn btn-primary':'btn btn-info'))?>
					<p> <? echo $data->description ?> </p>
				</h4>
			</li>
			<hr>
		<? endforeach ?>
	</ul>
</div>
</div>
