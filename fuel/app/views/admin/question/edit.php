<h2>Editing Questionnaire</h2>
<br>

<?php echo render('admin\question/_form'); ?>
<p>
	<?php echo Html::anchor('admin/question/view/'.$question->id, 'View'); ?> |
	<?php echo Html::anchor('admin/question', 'Back'); ?></p>
