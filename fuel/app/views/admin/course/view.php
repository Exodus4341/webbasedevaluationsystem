<!-- <h2>Viewing #<?php // echo $course->id; ?></h2> -->

<p>
	<strong>Course name:</strong>
	<?php echo $course->course_name; ?></p>

<?php echo Html::anchor('admin/course/edit/'.$course->id, 'Edit', array('class' => 'btn btn-warning')); ?> |
<?php echo Html::anchor('admin/course', 'Back',array('class' => 'btn btn-default')); ?>