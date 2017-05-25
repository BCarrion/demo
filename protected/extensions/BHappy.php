<?
/**
 *
 */
class BHappy extends CApplicationComponent
{

  function init()
  {
    echo "Inicie el componente Happy con la clase BHappy<br>";
  }

  public function saludo()
  {
    if (date('H') > 12) {
      return 'Buenos días';
    }
    else
      return "Hola buenas tardes";
  }
}
