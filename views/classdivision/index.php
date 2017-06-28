<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use app\models\SchoolClass;
use app\models\Division;

$this->title = "Create Division"

?>
<div class="school-class-index">

    <?= HTML::a("Create Division-Class link", ['create'], ['class' => 'btn btn-primary'])?>
     <?= 
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn', ],
                'divison_id',
                'class_id',
                ['class' => 'yii\grid\ActionColumn']
            ]
        ]);
     ?>
</div>
