<?
/**
 *
 */
class CountriesController extends Controller
{
  public function actionIndex()
  {
    $model = Countries::model()->findAll();
    $this->render('index', array('model' => $model));
  }
  public function actionCreate()
  {
    $model = new Countries();
    if(isset($_POST['Countries']))
    {
      $model->attributes = $_POST['Countries'];
      $model->save();
      if($model->save())
      {
        $this->redirect(array('index'));
      }
    }
    $this->render('create', array('model' => $model));
  }
}
