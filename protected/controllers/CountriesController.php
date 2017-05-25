<?
/**
 *
 */
class CountriesController extends Controller
{
  public function actionIndex()
  {
    #echo Yii::getPathOfALias("application")."<br>";//protected
    #echo Yii::getPathOfALias("webroot")."<br>";//root
    #echo Yii::getPathOfALias("ext")."<br>";//protected/extentions
    #echo Yii::getPathOfALias("zii")."<br>";//framework/zii

    #Yii::app()->happy;
    #Yii::app()->otroComponente;
    #echo Yii::app()->happy->saludo()."<br>";
    #Yii::app()->otroComponente->trato=2;
    #echo Yii::app()->otroComponente->saludo()."<br>";

    //$test = yii::app()->request->getPost('test', 'defaultValue'); # $_POST['test']
    //$test = yii::app()->request->getQuery('test', 'defaultValue'); # $_GET['test']
    //$test = yii::app()->request->getParam('test', 'defaultValue'); # $_POST['test'] && $_POST['test']

    #echo yii::app()->request->baseUrl.'<br>';
    #echo yii::app()->request->requestUri.'<br>';
    #echo yii::app()->request->pathInfo.'<br>';
    #echo yii::app()->request->urlReferrer.'<br>';
    #echo yii::app()->request->queryString.'<br>';
    #echo yii::app()->request->userAgent.'<br>';
    #echo yii::app()->request->userHost.'<br>';
    #echo yii::app()->request->userHostAddress.'<br>';

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
        Yii::app()->user->setFlash("success", "Se creo correctamente el Pais ");
        $this->redirect(array('index'));
      }
    }
    $this->render('create', array('model' => $model));
  }

  public function actionUpdate($id)
  {
    $model = Countries::model()->findByPk($id);
    if(isset($_POST['Countries']))
    {
      $model->attributes = $_POST['Countries'];
      if($model->save())
      {
        Yii::app()->user->setFlash("success", "Se edito correctamente el Pais ");
        $this->redirect(array('index'));
      }
      else Yii::app()->user->setFlash("warning", "No se actualizaron los datos");
    }
    $this->render('update', array('model' => $model));
  }

  public function actionDelete($id)
  {
    $model = Countries::model()->deleteByPk($id);
    Yii::app()->user->setFlash("error", "Se elimino el pais correctamente");
    $this->redirect(array('index'));
  }

  public function actionView($id)
  {
    $model = Countries::model()->findByPk($id);
    $this->render('view', array('model' => $model));
  }

  public function actionEnable($id)
  {
    $model = Countries::model()->findByPk($id);
    if($model->status == 1)
    {
      $model->status = 0;
    }
    else $model->status = 1;

    $model->save();
    $this->redirect(array('index'));
  }
}
