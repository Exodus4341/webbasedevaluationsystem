<!-- <h2>Viewing #<?php //echo $department->id; ?></h2> -->
<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/department', 'List of Departments'); ?></li>
  <li class="active">View Department</li>
</ol>
<p>
	<strong>Dept name:</strong>
	<?php echo $department->dept_name; ?></p>

<?php echo Html::anchor('admin/department/edit/'.$department->id, 'Edit', array('class' => 'btn btn-warning')); ?> |
<?php echo Html::anchor('admin/department', 'Back', array('class' => 'btn btn-default')); ?>