<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolClass */

$this->title = $model->class_id;
$this->params['breadcrumbs'][] = ['label' => 'School Class', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-class-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->class_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->class_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'class_id',
            'class_label',
        ],
    ]) ?>

</div>
