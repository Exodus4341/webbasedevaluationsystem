<h2>Listing question</h2>
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
				<?php echo Html::anchor('admin/question/view/'.$question['id'], '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
				<?php echo Html::anchor('admin/question/edit/'.$question['id'], '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
				<?php echo Html::anchor('admin/question/delete/'.$question['id'], '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'icon icon-trash', 'title'=>'Delete')); ?>

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
