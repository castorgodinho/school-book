<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Class';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-class-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create School Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'class_id',
            'class_label',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
