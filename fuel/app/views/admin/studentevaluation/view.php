<h2>Viewing #<?php echo $result->id; ?></h2>

<p>
	<strong>Questionnaire id:</strong>
	<?php echo $result->questionnaire_id; ?></p>
<p>
	<strong>Subj id:</strong>
	<?php echo $result->subj_id; ?></p>
<p>
	<strong>Teacher id:</strong>
	<?php echo $result->teacher_id; ?></p>

<?php echo Html::anchor('admin/results/edit/'.$result->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/results', 'Back'); ?>