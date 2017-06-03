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
<ul class="nav">
<? foreach(Yii::app()->authManager->getAuthItems() as $data): ?>
	<li><a href="#">
		<h4> <? echo $data->name?>
			<small>
				<? if($data->type == 0) echo 'Rol'?>
			<? if($data->type == 1) echo 'Tarea'?>
			<? if($data->type == 2) echo 'Operacion'?>
		</small>
		<? echo CHtml::Link($enable?'Off':'On'), array('users/assign'),array('class' =>$enable? 'btn btn-primary')?>
		<p>
			<? $enabled = Yii::app()->authManager->checkAccess($data->name, $model->id)?>
			<? echo $enabled? '<span class=\'label label-info\'> Habilitado </span>':'' ?>
		</p>
		</h4>
	</a></li>
<? endforeach ?>
</ul>
