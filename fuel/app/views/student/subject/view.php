<h2>Viewing #<?php echo $subject[9]['id']; ?></h2>
<p>
	<strong>subject Code:</strong>
	<?php echo $subject[9]['subj_code']; ?></p>
<p>
	<strong>subject Code:</strong>
	<?php echo $subject[9]['subj_desc']; ?></p>
<p>
	<strong>Schedule:</strong>
	<?php echo $subject[9]['schedule']; ?></p>
<p>
	<strong>Time:</strong>
	<?php echo $subject[9]['time']; ?></p>
<p>
	<strong>Room:</strong>
	<?php echo $subject[9]['room']; ?></p>
<p>
	<strong>Teacher Name:</strong>
	<?php echo ucwords($subject[9]['fname'])." ".ucwords($subject[9]['mname'])." ".ucwords($subject[9]['lname']); ?></p>
<p>
	<strong>Picture</strong>
	<?php echo Html::img('uploads/'.$subject[9]['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?>
</p>
<?php echo Html::anchor('student/subject/edit/'.$subject[9]['id'], 'Edit'); ?> |
<?php echo Html::anchor('student/subject', 'Back'); ?>