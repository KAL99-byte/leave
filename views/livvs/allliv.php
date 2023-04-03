<?php

use yii\helpers\html;

use yii\helpers\Url;
use yii\bootstrap4\Button;



$this->title = 'All Leave';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
  <div class="card">
    <div class="card-body">
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Leave Type</th>
      <th scope="col">Leave Description</th>
      <th scope="col">From Date</th>
      <th scope="col">To Date</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody >
    <?php  foreach($user as $k=> $field) { ?>
<tr>
<td> <?php echo $k+1; ?></td>
<td><?php  echo $field['leave_type']; ?></td>
<td><?php  echo  $field['leave_description'];?></td>
<td><?php  echo  $field['from_date'];?></td>
<td><?php  echo  $field['to_date'];?></td>



<td>
<?php echo Html::a('Edit', ['livvs/edit', 'uid' => $field['id']], ['class' => 'btn btn-sm btn-primary']) ?>
  <?php echo Html::a('Approve', ['livvs/approved', 'id' => $field['id']], ['class' => 'btn btn-sm btn-success']) ?>
  <?php echo Html::a('Reject', ['livvs/rejected', 'id' => $field['id']], ['class' => 'btn btn-sm btn-danger']) ?>
</td>






</tr>

    <?php  } ?>


  </tbody>
</table>
</div>
    </div>
  </div>
  </div>