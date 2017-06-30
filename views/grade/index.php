<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchGrade */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grade-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Grade', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'grade_id',
            'grade_label',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
