<ol class="breadcrumb">
	<li><?php echo Html::anchor('teacher/subject', 'Subjects'); ?></li>
  <li class="active">List of Students</li>
</ol>
<h2>List of Students</h2>
<br>
<?php if ($subjects): ?>
	Subject Code: <strong><?php echo ucwords($subjects[0]['subj_code']); ?> <br /></strong>
	Subject Description: <strong><?php echo ucwords($subjects[0]['subj_desc']); ?><br /></strong>
	Schedule: <strong><?php echo $subjects[0]['schedule']; ?><br /></strong>
	Time: <strong><?php echo $subjects[0]['time']; ?><br /></strong>
	Room: <strong><?php echo $subjects[0]['room']; ?><br /></strong>
	Date of evaluation: <strong><?php echo $subjects[0]['dateevaluation']; ?></strong>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Picture</th>
			<th>Name</th>
			<th>Date Evaluated</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($subjects as $subject): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$subject['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo ucwords($subject['fname'])." ".ucwords($subject['mname'])." ".ucwords($subject['lname'])	; ?></td>
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