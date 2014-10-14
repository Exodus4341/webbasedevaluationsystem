<!-- <h2>Viewing #<?php //echo $department->id; ?></h2> -->

<p>
	<strong>Dept name:</strong>
	<?php echo $department->dept_name; ?></p>

<?php echo Html::anchor('admin/department/edit/'.$department->id, 'Edit', array('class' => 'btn btn-warning')); ?> |
<?php echo Html::anchor('admin/department', 'Back', array('class' => 'btn btn-default')); ?>