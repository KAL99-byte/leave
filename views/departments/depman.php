<?php
use yii\helpers\html;
use yii\helpers\Url;



$this->title = 'Manage Department';
$this->params['breadcrumbs'][] = $this->title;
?>
<p align="right">
<a class="btn btn-sm btn-primary" href="<?= Url::to(['departments/adddep']) ?>" role="button">+Add Department</a>
</p>
<div class="container">
  <div class="card">
<div class="card-body">
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Department Name</th>
      <th scope="col">Department Short Name</th>
      <th scope="col">Department Code</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody >
    <?php  foreach($user as $k=> $field) { ?>
<tr>
<td> <?php echo $k+1; ?></td>
<td><?php  echo $field['dept_name']; ?></td>
<td><?php  echo  $field['dept_short_name'];?></td>
<td><?php  echo $field['dept_code']; ?></td>

<td> <?php echo  Html::a("Edit",['departments/edit','uid'=>$field['id']],['class'=>'badge badge-primary']); ?>|
<?php echo   Html::a("Delete",['departments/del','uid'=>$field['id']],['class'=>'badge badge-danger','data-confirm'=>'are you sure?']); ?>

    
</div>

</td>
</tr>



    <?php  } ?>


  </tbody>
  </table>
  </div>
  </div>
  </div>