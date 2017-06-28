<?php



namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Classdivision;
use app\models\Division;
use app\models\SchoolClass;

class ClassdivisionController extends Controller
{
    public function actionIndex()
    {
        $classdivisionModel = new ClassDivision();
        if($classdivisionModel->load(Yii::$app->request->post())){
            foreach($classdivisionModel->divison_id as $id){
                $classdivision = new ClassDivision();
                $classdivision->class_id = $classdivisionModel->class_id;
                $classdivision->divison_id = $id;
                $classdivision->status = $classdivisionModel->status;
                $classdivision->save();
            }
        }else{
            return $this->render('create', [
                'classdivisionModel' => $classdivisionModel,
                ]);
        }
    }

}
