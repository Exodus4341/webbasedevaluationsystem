<h2>Editing Result</h2>
<br>

<?php echo render('admin\studentevaluation/_form'); ?>
<p>
	<?php echo Html::anchor('admin/studentevaluation/view/'.$studentevaluation->id, 'View'); ?> |
	<?php echo Html::anchor('admin/studentevaluation', 'Back'); ?></p>
