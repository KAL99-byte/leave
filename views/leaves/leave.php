<?php 
use yii\helpers\html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;


$this->title = 'Add Leave Type';
$this->params['breadcrumbs'][] = $this->title;
?>
<p align="left">
<a class="btn btn-sm btn-primary" href="<?= Url::to(['leaves/manleave']) ?>" role="button">Back</a>
</p>


<div class="container">
  <div class="card">
    <div class="card-body">
   
    <?php $form=ActiveForm::begin(); ?>
 
    
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <?= $form->field($model,'leave_type')->textInput(['placeholder'=>'Leave Type']); ?>
    </div>
    <div class="form-group col-md-6">
         <?= $form->field($model,'description')->textInput(['placeholder'=>'Description']); ?>
    </div>
  </div>
  

 

  <p align="right">
  <?= Html::submitButton("Save",['class'=>'btn btn-success']); ?>
</p>


<?php ActiveForm::end(); ?>
</div>
  </div>
</div>


