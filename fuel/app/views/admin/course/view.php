<!-- <h2>Viewing #<?php // echo $course->id; ?></h2> -->
<ol class="breadcrumb">
	<li><?php echo Html::anchor('admin/course', 'Courses'); ?></li>
 	<li class="active">View Course</li>
</ol>
<p>
	<strong>Course name:</strong>
	<?php echo $course->course_name; ?></p>

<?php echo Html::anchor('admin/course/edit/'.$course->id, 'Edit', array('class' => 'btn btn-warning')); ?> |
<?php echo Html::anchor('admin/course', 'Back',array('class' => 'btn btn-default')); ?>