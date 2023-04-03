<?php 
use yii\helpers\html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url; 
use yii\helpers\ArrayHelper;
use app\models\Leave;


$this->title = 'Add Leave';
$this->params['breadcrumbs'][] = $this->title;
?>




<?php

    $dp=Leave::find()->all();

    $listData=ArrayHelper::map($dp,'leave_type','leave_type');

    
   
?>
<p align="left">
<a class="btn btn-sm btn-primary" href="<?= Url::to(['livvs/allliv']) ?>" role="button">Back</a>
</p>
<div class="container">
  <div class="card">
    
    <div class="card-body">
   
    <?php $form=ActiveForm::begin(); ?>
 
    


    
<form> 


<div class="form-row">
    <div class="form-group col-md-6">
    <?= $form->field($model, 'leave_type')->dropDownList($listData,['prompt'=>'--Select leave type--']); ?>

    </div>
    <div class="form-group col-md-6">
         <?= $form->field($model,'leave_description')->textInput(['placeholder'=>'Description']); ?>
    </div>
  </div>
 

  <div class="form-row">
  <div class="form-group col-md-6">
  <?= $form->field($model,'from_date')->textInput(['class' => 'form-control datepicker', 'placeholder'=>'From Date']); ?>
    </div>
    <div class="form-group col-md-6">
    <?= $form->field($model,'to_date')->textInput(['class' => 'form-control datepicker', 'placeholder'=>'To Date']); ?>
    </div>
  </div>

  <p align="right">
  <?= Html::submitButton("Save",['class'=>'btn btn-success']); ?>
</p>


<?php ActiveForm::end(); ?>
</div>
  </div>
</div>


