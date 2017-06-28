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

        $class = SchoolClass::findOne(1);
        echo $class->division;


        /*$dataProvider = new ActiveDataProvider([
            'query' => Classdivision::find(), 
        ]);

        return $this->render('index',[
            'dataProvider' => $dataProvider, 
        ]);*/
    }

    public function actionCreate(){
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
