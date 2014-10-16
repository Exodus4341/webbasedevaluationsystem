<!-- <input type="hidden" value='"<?php // echo $years->id; ?>"'> -->
<ol class='breadcrumb'>
	<li><?php echo Html::anchor('admin/academicyear', 'Academic Year'); ?></li>
	<li class='active'>View Academic Year</li>
</ol>
<p>
	<strong>Academic Year:</strong>
	<?php echo $years->year; ?></p>
<?php echo Html::anchor('admin/academicyear/edit/'.$years->id, 'Edit', array('class' => 'btn btn-warning')); ?> |
<?php echo Html::anchor('admin/academicyear', 'Back', array('class' => 'btn btn-default')); ?>