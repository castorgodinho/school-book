<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Division */

$this->title = "Division " . $model->division_label;
$this->params['breadcrumbs'][] = ['label' => 'Divisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="division-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->division_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->division_id], [
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
            'division_id',
            'division_label',
        ],
    ]) ?>

</div>
