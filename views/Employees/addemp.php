<?php 
use yii\helpers\html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Department;
use yii\helpers\Url;




$this->title = 'Add Employee';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$gender = [
    
    ' Male '=>'Male',
    'Female '=>'Female ',
    
];
   
    $city=[
        'Dar-es-salaam'=>'Dar-es-salaam',
        'Mwanza'=>'Mwanza',
        'Mbeya'=>'Mbeya',
    ];


    $dp=Department::find()->all();

    $listData=ArrayHelper::map($dp,'dept_name','dept_name');

    
   
?>

<p align="left">
<a class="btn btn-sm btn-primary" href="<?= Url::to(['employees/empman']) ?>" role="button">Back</a>
</p>

<div class="container">
  <div class="card">
    <div class="card-body">
   
    <?php $form=ActiveForm::begin(); ?>
 
    
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <?= $form->field($model,'first_name')->textInput(['placeholder'=>'First Name']); ?>
    </div>
    <div class="form-group col-md-6">
         <?= $form->field($model,'last_name')->textInput(['placeholder'=>'Last Name']); ?>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
  
    <?= $form->field($model,'email')->textInput(['placeholder'=>'email']); ?>
  </div>
  <div class="form-group col-md-6">
  
  <?= $form->field($model,'gender')->dropDownList($gender ,['prompt'=> '--select gender--']); ?>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<?= $form->field($model,'birth_date')->textInput(['class' => 'form-control datepicker', 'placeholder'=>'Birth Date']); ?>

</div>
<div class="form-group col-md-6">
  <?= $form->field($model, 'dept_name')->dropDownList($listData,['prompt'=>'--Select department--']); ?>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
  
  <?= $form->field($model,'city')->dropDownList($city ,['prompt'=> '--select city--']); ?>
</div>
<div class="form-group col-md-6">
  
  <?= $form->field($model,'address')->textInput(['placeholder'=>'Address ']); ?>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
  
  <?= $form->field($model,'phone_number')->textInput(['placeholder'=>'Phone Number']); ?>
</div>
<div class="form-group col-md-6">
  
  <?= $form->field($model,'password')->textInput(['placeholder'=>'Password']); ?>
</div>
</div>
<div class="form-row">




</div>

  <p align="right">
  <?= Html::submitButton("Save",['class'=>'btn btn-success']); ?>
</p>


<?php ActiveForm::end(); ?>

</div>
  </div>
</div>


