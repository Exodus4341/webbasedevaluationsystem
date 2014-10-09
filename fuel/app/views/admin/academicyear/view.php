<input type="hidden" value='"<?php echo $years->id; ?>"'>
<p>
	<strong>Academic Year:</strong>
	<?php echo $years->year; ?></p>

<?php echo Html::anchor('admin/academicyear/edit/'.$years->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/academicyear', 'Back'); ?>