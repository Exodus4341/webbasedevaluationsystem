<h2>Listing question</h2>
<br>
<?php if ($question): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Category</th>
			<th>Question</th>
			<th>Answer</th>
			<th>Comment</th>
			<th>Subj id</th>
			<th>Stud id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($question as $questionnaire): ?>		<tr>

			<td><?php echo $questionnaire->category; ?></td>
			<td><?php echo $questionnaire->question; ?></td>
			<td><?php echo $questionnaire->answer; ?></td>
			<td><?php echo $questionnaire->comment; ?></td>
			<td><?php echo $questionnaire->subj_id; ?></td>
			<td><?php echo $questionnaire->stud_id; ?></td>
			
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No question.</p>

<?php endif; ?>