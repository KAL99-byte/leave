<?php 
use yii\helpers\html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Add Department';
$this->params['breadcrumbs'][] = $this->title;
?>
<p align="left">
<a class="btn btn-sm btn-primary" href="<?= Url::to(['departments/depman']) ?>" role="button">Back</a>
</p>

<div class="container">
  <div class="card">    <div class="card-body">
   
    <?php $form=ActiveForm::begin(); ?>
 
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <?= $form->field($model,'dept_name')->textInput(['placeholder'=>'Department Name']); ?>
    </div>
    <div class="form-group col-md-6">
         <?= $form->field($model,'dept_short_name')->textInput(['placeholder'=>'Department Short Name']); ?>
    </div>
  </div>
  <div class="form-group">
  
    <?= $form->field($model,'dept_code')->textInput(['placeholder'=>'Department Code']); ?>
  </div>


 

  <p align="right">
  <?= Html::submitButton("Save",['class'=>'btn btn-success']); ?>
</p>


<?php ActiveForm::end(); ?>
</div>
</div>

</div>


