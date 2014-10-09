<h2>Viewing #<?php echo $question->id; ?></h2>

<p>
	<strong>Category:</strong>
	<?php echo $question->category; ?></p>
<p>
	<strong>Question:</strong>
	<?php echo $question->question; ?></p>
<p>
	<strong>Answer:</strong>
	<?php echo $question->answer; ?></p>
<p>
	<strong>Comment:</strong>
	<?php echo $question->comment; ?></p>
<p>
	<strong>Subj id:</strong>
	<?php echo $question->subj_id; ?></p>
<p>
	<strong>Stud id:</strong>
	<?php echo $question->stud_id; ?></p>

<?php echo Html::anchor('admin/question', 'Back'); ?>