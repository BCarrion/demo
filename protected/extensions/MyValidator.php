<?
/**
 *
 */
class MyValidator extends CValidator
{
  public $word = 'espia';
  public $filtro = '';

  public function validateAttribute($object, $attribute)
  {
      if ($object->$attribute == $this->word)
      {
        $this->addError($object, $attribute, 'Estoy validando desde el archivo de validaciones creado');
      }
  }
}
