<h2>Editing Department</h2>
<br>

<?php echo render('admin\department/_form'); ?>
<p>
	<?php echo Html::anchor('admin/department/view/'.$department->id, 'View'); ?> |
	<?php echo Html::anchor('admin/department', 'Back'); ?></p>
