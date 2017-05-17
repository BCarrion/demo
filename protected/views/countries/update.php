<h1>Actualizar el ID - <? echo $model -> id ?></h1>
<hr>
<div class = "form-group">
<? $form = $this -> beginWidget('CActiveForm')?>
<div class = "form-group">
  <?php echo $form -> labelEx($model,'Pais'); ?>
  <? echo $form -> textField($model, 'name') ?>
  <? echo $form -> error($model, 'name') ?>
</div>
<div class = "form-group">
  <?php echo $form -> labelEx($model,'Estatus'); ?>
  <? echo $form -> textField($model, 'status') ?>
  <? echo $form -> error($model, 'status') ?>
</div>
<? echo CHtml::submitButton('Registrar', array('class' => 'btn btn-primary')) ?>
<? $this -> endWidget()?>
</div>
