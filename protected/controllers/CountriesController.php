<?
/**
 *
 */
class CountriesController extends Controller
{
  public function actionIndex()
  {
    $model_countries = new Countries();
    $model_countries->name='Colombia';
    $model_countries->status=1;
    $model_countries->save();

    $consulta = Countries::model()->findAll();
    $this->render('index', array('consulta' => $consulta));
  }
}
