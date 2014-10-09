<h2>Viewing #<?php echo $questions->id; ?></h2>

<p>
	<strong>Category:</strong>
	<?php echo $questions->category; ?></p>
<p>
	<strong>Question:</strong>
	<?php echo $questions->question; ?></p>
<p>
	<strong>Subj id:</strong>
	<?php echo $questions->subj_id; ?></p>

<?php echo Html::anchor('admin/question/edit/'.$questions->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/question', 'Back'); ?>