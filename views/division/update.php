<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Division */

$this->title = 'Update Division: ' . $model->division_id;
$this->params['breadcrumbs'][] = ['label' => 'Divisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->division_id, 'url' => ['view', 'id' => $model->division_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="division-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
