<h2>List of Students</h2>
<br />
<?php if ($teachers): ?>
	<table>
		<tr>
			<td><?php echo Html::img('uploads/'.$teachers[0]['pic_url'], array('class' => "thumbnail", "style" => "width:150px; height:150px")); ?></td>
		</tr>
		<tr>
			<td>Name: </td>
			<td><b><?php echo ucwords($teachers[0]['fname']) ." ". ucwords($teachers[0]['mname']) .". ". ucwords($teachers[0]['lname']);  ?></b></td>
		</tr>
		<tr>
			<td>Subject Code: </td>
			<td><b><?php echo $teachers[0]['subj_code']; ?></b></td>
		</tr>
		<tr>
			<td>Subject Description: </td>
			<td><b><?php echo $teachers[0]['subj_desc']; ?></b></td>
		</tr>
		<tr>
			<td>Schedule: </td>
			<td><b><?php echo $teachers[0]['schedule']; ?></b></td>
		</tr>
		<tr>
			<td>Time: </td>
			<td><b><?php echo $teachers[0]['time']; ?></b></td>
		</tr>
		<tr>
			<td>Room: </td>
			<td><b><?php echo $teachers[0]['room']; ?></b></td>
		</tr>
	</table>
<?php endif ?>
<br />
<br />
<?php if ($studentlist): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Picture</th>
			<th>Name</th>
			<th>Date Evaluated</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($studentlist as $studentlists): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$studentlists['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo ucwords($studentlists['fname'])." ".ucwords($studentlists['mname'])." ".ucwords($studentlists['lname'])	; ?></td>
			<td><?php if ($studentlists['ssc'] == "") {
				echo "No Evaluation Conducted";
			}else{
				echo $studentlists['ssc'];
				}; ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No studentlists.</p>

<?php endif; ?>
<br />
<br />
