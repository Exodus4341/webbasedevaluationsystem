<h2>Viewing #<?php echo $course->id; ?></h2>

<p>
	<strong>Course name:</strong>
	<?php echo $course->course_name; ?></p>

<?php echo Html::anchor('admin/course/edit/'.$course->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/course', 'Back'); ?>