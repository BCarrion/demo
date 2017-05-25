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

    Yii::app()->happy;
    echo Yii::app()->happy->saludo()."<br>";

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
