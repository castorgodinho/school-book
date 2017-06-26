<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SchoolClass */

$this->title = 'Create School Class';
$this->params['breadcrumbs'][] = ['label' => 'School Class', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-class-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
