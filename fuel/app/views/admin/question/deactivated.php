<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/question', 'Questionnaires'); ?></li>
  <li class="active">Deactivated Questionnaires</li>
</ol>
<h2>List of Deactivated Questionnaires</h2>
<br>
<?php if ($questions): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Category</th>
			<th>Question</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($questions as $question): ?>		<tr>

			<td><?php echo $question['cat_name']; ?></td>
			<td><?php echo $question['order_no'].". ".$question['question']; ?></td>
			<td>
				<?php echo Html::anchor('admin/question/activateQuestions/'.$question['category'].'/'.$question['order_no'], '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'glyphicon glyphicon-ok btn btn-success btn-xs', 'title'=>'Activate Questionnaire')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Deactivated Questionnaires.</p>

<?php endif; ?>