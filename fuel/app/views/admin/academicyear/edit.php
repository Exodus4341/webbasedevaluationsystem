<h2>Editing Course</h2>
<br>

<?php echo render('admin\academicyear/_form'); ?>
<p>
	<?php echo Html::anchor('admin/academicyear/view/'.$year->id, 'View'); ?> |
	<?php echo Html::anchor('admin/academicyear', 'Back'); ?></p>
