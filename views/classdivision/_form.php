<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use app\models\SchoolClass;
use app\models\Division;



?>
<div class="school-class-index">
     <?php $form = ActiveForm::begin();?>
    <div class="row">
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <?= $form->field($classdivisionModel, 'class_id')->dropDownlist(
                ArrayHelper::map(SchoolClass::find()->all(), 'class_id','class_label')
                );      
            ?>
        </div>
         <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <?= $form->field($classdivisionModel, 'divison_id')->checkboxList(
                    ArrayHelper::map(Division::find()->all(), 'division_id', 'division_label')); 
                ?>
        </div>
        
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <?= $form->field($classdivisionModel, 'status')->dropDownlist(
                ['1'=>'Enable', '0' => 'disable'] 
            ); ?>
        </div>
        

        <div class="row">
            
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                 <?= HTML::submitButton($classdivisionModel->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success']); ?>
            </div>
            
        </div>
        
       
    </div>
    <?php ActiveForm::end(); ?>
    
</div>
