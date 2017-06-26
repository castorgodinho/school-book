<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolClass */

$this->title = 'Update School Class: ' . $model->class_id;
$this->params['breadcrumbs'][] = ['label' => 'School Class', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->class_id, 'url' => ['view', 'id' => $model->class_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-class-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
