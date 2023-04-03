<?php
use yii\helpers\html;
use yii\helpers\Url;
$this->title = 'Employee Management';
$this->params['breadcrumbs'][] = $this->title;
?>

<p align="right">
<a class="btn btn-sm btn-primary" href="<?= Url::to(['employees/addemp']) ?>" role="button">+Add Employee</a>
</p>
<div class="container">
  <div class="card">
<div class="card-body">
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Department Name</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody >
    <?php  foreach($user as $k=> $field) { ?>
<tr>
<td> <?php echo $k+1; ?></td>
<td><?php  echo $field->first_name; ?></td>
<td><?php  echo $field->last_name;?></td>
<td><?php  echo $field->email; ?></td>
<td><?php  echo $field->gender; ?></td>
<td><?php  echo $field->birth_date; ?></td>
<td><?php  echo $field->dept_name; ?></td>
<td><?php  echo $field->address; ?></td>
<td><?php  echo $field->city; ?></td>
<td><?php  echo $field->phone_number; ?></td>
<td><?php  echo $field->password; ?></td>

<td> <?php echo  Html::a("Edit",['employees/edit','uid'=>$field->id],['class'=>'badge badge-primary']); ?>|
<?php echo   Html::a("Delete",['employees/del','uid'=>$field->id],['class'=>'badge badge-danger',
'data-confirm'=>'are you sure?',
'data-method'=>'post']); ?>
</td>
</tr>

    <?php  } ?>

  </tbody>
</table>
</div>
  </div>
  </div>
  </div>