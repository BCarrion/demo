<?
/**
 *
 */
class MHappy extends CApplicationComponent
{
  public $trato;

  function init()
  {
    echo "Inicie el componente otroComponente con la clase MHappy<br>";
  }

  public function saludo()
  {
    if ($this->trato === null) {
      return 'Hola, como estas';
    }
    if ($this->trato === 1) {
      return "Buenas, que necesita?";
    }
    else
      return "Que le importa";
  }
}
