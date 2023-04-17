<?php 
use yii\helpers\html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Add Branch';
$this->params['breadcrumbs'][] = $this->title;
?>
<p align="left">
<a class="btn btn-sm btn-primary" href="<?= Url::to(['branchs/depman']) ?>" role="button">Back</a>
</p>

<div class="container">
  <div class="card">    <div class="card-body">
   
    <?php $form=ActiveForm::begin(); ?>
 
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <?= $form->field($model,'branch_name')->textInput(['placeholder'=>'Branch Name']); ?>
    </div>
    <div class="form-group col-md-6">
         <?= $form->field($model,'branch_short_name')->textInput(['placeholder'=>'Branch Short Name']); ?>
    </div>
  </div>
  <div class="form-group">
  
    <?= $form->field($model,'branch_code')->textInput(['placeholder'=>'branch Code']); ?>
  </div>


 

  <p align="right">
  <?= Html::submitButton("Save",['class'=>'btn btn-success']); ?>
</p>


<?php ActiveForm::end(); ?>
</div>
</div>

</div>


