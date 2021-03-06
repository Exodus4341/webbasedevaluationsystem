<ol class="breadcrumb">
  <li class="active">Subjects</li>
</ol>
<h2>List of Subjects</h2>
<br>
<?php $date = date("Y-m-d"); ?>
<?php if ($users2): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Picture</th>
			<th>Teacher Name</th>
			<th>Subject Code</th>
			<th>Subject Description</th>
			<th>Schedule</th>
			<th>Time</th>
			<th>Room</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users2 as $key => $subject): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$subject['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo ucwords($subject['fname']) ." ". ucwords($subject['mname']) ." ". ucwords($subject['lname']); ?></td>
			<td><?php echo $subject['subj_code']; ?></td>
			<td><?php echo $subject['subj_desc']; ?></td>
			<td><?php echo $subject['schedule']; ?></td>
			<td><?php echo $subject['time']; ?></td>
			<td><?php echo $subject['room']; ?></td>
			<td><?php echo Html::anchor('student/subject/viewclassmates/'.$subject['sid'], 'View Classmates', array('class' => 'btn btn-success')); ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Subjects in this semester.</p>

<?php endif; ?>
