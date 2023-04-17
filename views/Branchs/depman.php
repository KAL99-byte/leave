<?php
use yii\helpers\html;
use yii\helpers\Url;



$this->title = 'Manage Branch';
$this->params['breadcrumbs'][] = $this->title;
?>
<p align="right">
<a class="btn btn-sm btn-primary" href="<?= Url::to(['branchs/adddep']) ?>" role="button">+Add Branch</a>
</p>
<div class="container">
  <div class="card">
<div class="card-body">
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Branch Name</th>
      <th scope="col">Branch Short Name</th>
      <th scope="col">Branch Code</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody >
    <?php  foreach($user as $k=> $field) { ?>
<tr>
<td> <?php echo $k+1; ?></td>
<td><?php  echo $field['branch_name']; ?></td>
<td><?php  echo  $field['branch_short_name'];?></td>
<td><?php  echo $field['branch_code']; ?></td>

<td> <?php echo  Html::a("Edit",['branchs/edit','uid'=>$field['id']],['class'=>'badge badge-primary']); ?>|
<?php echo   Html::a("Delete",['branchs/del','uid'=>$field['id']],['class'=>'badge badge-danger','data-confirm'=>'Are you sure you want to delete ?']); ?>

    
</div>

</td>
</tr>



    <?php  } ?>


  </tbody>
  </table>
  </div>
  </div>
  </div>