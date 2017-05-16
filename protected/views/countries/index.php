<h3>
  <? echo CHtml::link('Registrar un nuevo Pais', array('create'), array('class' => 'btn btn-primary'))?>
</h3>
<hr>
<h1> Estos son los paises que estan creados</h1>
  <? foreach($model as $country):?>
  <h3>
    Nombre: <? echo $country->name?>
    <small> <br>Estado: <? echo $country->status==1?'Activo':'Inactivo'?></small>
  </h3>
<? endforeach ?>
