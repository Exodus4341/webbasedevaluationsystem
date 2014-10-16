<h2>Viewing #<?php echo $subject->id; ?></h2>

<p>
	<strong>Schedule:</strong>
	<?php echo $subject->schedule; ?></p>
<p>
	<strong>Time:</strong>
	<?php echo $subject->time; ?></p>
<p>
	<strong>Room:</strong>
	<?php echo $subject->room; ?></p>
<p>
	<strong>Teacher id:</strong>
	<?php echo $subject->teacher_id; ?></p>
<p>
	<strong>Question id:</strong>
	<?php echo $subject->question_id; ?></p>

<?php echo Html::anchor('teacher/subject', 'Back'); ?>