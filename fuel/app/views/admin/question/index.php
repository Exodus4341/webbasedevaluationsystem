<ol class="breadcrumb">
  <li class="active">Questionnaires</li>
</ol>
<h2>List of Questionnaires</h2>
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
			<td><?php echo $question['question']; ?></td>
			<td>
				<?php echo Html::anchor('admin/question/view/'.$question['id'], '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View')); ?>
				<?php echo Html::anchor('admin/question/edit/'.$question['id'], '', array('class'=>'glyphicon glyphicon-wrench btn btn-warning btn-xs', 'title'=>'Edit')); ?>
				<?php echo Html::anchor('admin/question/delete/'.$question['id'], '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'glyphicon glyphicon-trash btn btn-danger btn-xs', 'title'=>'Delete')); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No question.</p>

<?php endif; ?><p>
<br />
<br />
	<?php echo Html::anchor('admin/question/create', 'Add new question', array('class' => 'btn btn-success')); ?>
</p>
