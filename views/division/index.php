<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchDivision */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Divisions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="division-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Division', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'division_id',
            'division_label',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
