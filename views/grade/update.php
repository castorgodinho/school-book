<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Grade */

$this->title = 'Update Grade: ' . $model->grade_label;
$this->params['breadcrumbs'][] = ['label' => 'Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->grade_label, 'url' => ['view', 'id' => $model->grade_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grade-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
