<?

class HolaController extends Controller
{
    public function actionIndex()
    {
      $model = Users::model()->findAll();
      $twitter = '@CodigoBerna';
      $this->render('index', array('model' => $model, 'twitter' => $twitter));
    }
}
