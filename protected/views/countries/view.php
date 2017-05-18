<h1>Ver ID - <? echo $model -> id ?></h1>
<table class="table">
  <tbody>
    <tr>
      <td><strong>ID</strong></td>
      <td><? echo $model->id ?></td>
    </tr>
    <tr>
      <th><strong>Pais</strong></th>
      <td><? echo $model->name ?></td>
    </tr>
    <tr>
      <th><strong>Estado</strong></th>
      <td>
        <span class='label label-<? echo $model->status==1? "info":"warning" ?>'>
        <? echo $model->status==1? "Activo":"Inactivo" ?></span>
      </td>
    </tr>
    </tr>
  </tbody>
</table>
