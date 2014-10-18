<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/users/teacher_list', 'Teacher List'); ?></li>
  <li class="active">List of Student</li>
</ol>
<h2>Lisf of Subjects</h2>
<br>
<?php if ($teacher_subjects): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Subject Code</th>
			<th>Subject Description</th>
			<th>Schedule</th>
			<th>Time</th>
			<th>Room</th>
			<th>Date of evaluation</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($teacher_subjects as $teacher_subject): ?>		<tr>
			<td><?php echo $teacher_subject['subj_code']; ?></td>
			<td><?php echo $teacher_subject['subj_desc']; ?></td>
			<td><?php echo $teacher_subject['schedule']; ?></td>
			<td><?php echo $teacher_subject['time']; ?></td>
			<td><?php echo $teacher_subject['room']; ?></td>
			<td><?php echo $teacher_subject['dateevaluation']; ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No.Students.</p>

<?php endif; ?>