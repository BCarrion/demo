<table class="table table-striped">
  <thead>
    <th style="background-color: #555; color: white">ID</th>
    <th style="background-color: #555; color: white">PAIS</th>
    <th style="background-color: #555; color: white">ESTADO</th>
  </thead>
  <? foreach($model as $country):?>
  <tr>
    <td><? echo $country -> id ?></td>
    <td>
      <? echo $country -> name ?>
    </td>
    <td>
        <? echo $country->status==1? "Activo":"Inactivo" ?>
  </td>
  </tr>
<? endforeach ?>
</table>
