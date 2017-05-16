<h1> Estos son los paises que estan creados</h1>
  <? foreach($consulta as $country):?>
  <h3>
    Nombre: <? echo $country->name?>
    <small> <br>Estado: <? echo $country->status==1?'Enable':'Disable'?></small>
  </h3>
<? endforeach ?>
