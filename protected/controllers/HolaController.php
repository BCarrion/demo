<?

class HolaController extends Controller
{
    public function actionIndex()
    {
      $usuarios = Users::model()->findAll();
      $twitter = '@CodigoBerna';
      $this->render('index', array('usuarios' => $usuarios, 'twitter' => $twitter));
    }
}
