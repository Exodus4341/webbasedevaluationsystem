<!-- <h2>Viewing #<?php // echo $questions[0]['qid']; ?></h2> -->
<p>
	<strong>Category:</strong>
	<?php echo $questions[0]['cat_name']; ?></p>
<p>
	<strong>Question:</strong>
	<?php echo $questions[0]['question']; ?></p>
<?php echo Html::anchor('admin/question/edit/'.$questions[0]['qid'], 'Edit', array('class' => 'btn btn-warning')); ?> |
<?php echo Html::anchor('admin/question', 'Back', array('class' => 'btn btn-default')); ?>