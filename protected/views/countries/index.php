<h3>
  <? echo CHtml::link('Registrar un nuevo Pais', array('create'), array('class' => 'btn btn-primary'))?>
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
      <?  echo CHtml::link($country -> name, array('view', 'id' => $country -> id)) ?>
    </td>
    <td><span class='label label-<? echo $country->status==1? "info":"warning" ?>'>
    <? echo $country->status==1? "Activo":"Inactivo" ?></span></td>
    <td>
    <? echo CHtml::link('Editar', array('update', 'id' => $country -> id), array('class' => 'btn btn-warning'))?>
    <? echo CHtml::link('Eliminar', array('delete', 'id' => $country -> id), array('class' => 'btn btn-danger', 'confirm' => 'Desea eliminar el pais '.$country->name.'?'))?>
    </td>
  </tr>
<? endforeach ?>
</table>
