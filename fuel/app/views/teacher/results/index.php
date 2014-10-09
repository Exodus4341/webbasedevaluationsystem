<h2>Listing Results</h2>
<br>
<?php if ($results): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
	<thead>
		<tr>
			<th>Questionnaire id</th>
			<th>Subj id</th>
			<th>Teacher id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($results as $result): ?>		<tr>

			<td><?php echo $result->question_id; ?></td>
			<td><?php echo $result->subj_id; ?></td>
			<td><?php echo $result->teacher_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/results/view/'.$result->id, 'View'); ?> |
				<?php echo Html::anchor('admin/results/delete/'.$result->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Results.</p>

<?php endif; ?>
