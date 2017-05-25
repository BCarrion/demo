<h3>
  <? echo CHtml::link('Registrar un nuevo Pais', array('create'), array('class' => 'btn btn-primary'))?>
  <? echo CHtml::link('Exportar listado', array('index','excel' => 1), array('class' => 'btn btn-info'))?>
</h3>
<hr>
<h1> Estos son los paises que estan creados</h1>
<table>
  <thead>
    <th>ID</th>
    <th>Pais</th>
    <th>Estado</th>
    <th>Acciones</th>
  </thead>

  <? foreach($model as $country):?>
  <tr>
    <td><? echo $country -> id ?></td>
    <td>
      <? echo CHtml::link($country -> name, array('view', 'id' => $country -> id)) ?>
    </td>
    <td>
      <a href="<? echo $this->createUrl('enable',array('id'=>$country->id))?>">
      <span class='label label-<? echo $country->status==1? "info":"warning" ?>'>
        <? echo $country->status==1? "Activo":"Inactivo" ?>
      </span>
      </a>
  </td>
    <td>
    <? echo CHtml::link('Editar', array('update', 'id' => $country -> id), array('class' => 'btn btn-warning'))?>
    <? echo CHtml::link('Eliminar', array('delete', 'id' => $country -> id), array('class' => 'btn btn-danger', 'confirm' => 'Desea eliminar el pais '.$country->name.'?'))?>
    </td>
  </tr>
<? endforeach ?>
</table>
