<?
/**
 *
 */
class RoleForm extends CFormModel
{

  #Creamos las propiedades que va a tener el formulario
  public static $types = array('Operation', 'Task', 'Role');
  public $name;
  public $description;
  public $type = 2;

  public function rules()
  {
    return array(
      array('name, type', 'required'),
    array('description', 'ext.MyValidator', /*'filter', 'filter'=>'trim' trim elimina espacios en blanco*/),
    );
  }

}
