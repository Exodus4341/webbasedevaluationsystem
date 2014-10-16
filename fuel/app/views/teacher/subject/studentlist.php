<ol class="breadcrumb">
	<li><?php echo Html::anchor('teacher/subject', 'Subjects'); ?></li>
  <li class="active">List of Students</li>
</ol>
<h2>List of Students</h2>
<br>
<?php if ($subjects): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Picture</th>
			<th>Name</th>
			<th>Subject Code</th>
			<th>Subeject Description</th>
			<th>Schedule</th>
			<th>Time</th>
			<th>Room</th>
			<th>Date Evaluated</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($subjects as $subject): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$subject['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo ucwords($subject['fname'])." ".ucwords($subject['mname'])." ".ucwords($subject['lname'])	; ?></td>
			<td><?php echo $subject['subj_code']; ?></td>
			<td><?php echo $subject['subj_desc']; ?></td>
			<td><?php echo $subject['schedule']; ?></td>
			<td><?php echo $subject['time']; ?></td>
			<td><?php echo $subject['room']; ?></td>
			<td><?php if ($subject['ssc'] == "") {
				echo "No Evaluation Conducted";
			}else{
				echo $subject['ssc'];
				}; ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Subjects.</p>

<?php endif; ?>