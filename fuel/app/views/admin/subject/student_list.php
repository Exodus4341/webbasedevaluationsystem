<ol class="breadcrumb">
	<li><?php echo Html::anchor('admin/subject', 'Subject'); ?></li>
 	<li class="active">List of Students</li>
</ol>
<h2>List of Students</h2>
<br />
<?php if ($teachers): ?>
	<table>
		<tr>
			<td><?php echo Html::img('uploads/'.$teachers[0]['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
		</tr>
		<tr>
			<td>Name: </td>
			<td><?php echo ucwords($teachers[0]['fname']) ." ". ucwords($teachers[0]['mname']) .". ". ucwords($teachers[0]['lname']);  ?></td>
		</tr>
		<tr>
			<td>Subject Code: </td>
			<td><?php echo $teachers[0]['subj_code']; ?></td>
		</tr>
		<tr>
			<td>Subject Description: </td>
			<td><?php echo $teachers[0]['subj_desc']; ?></td>
		</tr>
		<tr>
			<td>Schedule: </td>
			<td><?php echo $teachers[0]['schedule']; ?></td>
		</tr>
		<tr>
			<td>Time: </td>
			<td><?php echo $teachers[0]['time']; ?></td>
		</tr>
		<tr>
			<td>Room: </td>
			<td><?php echo $teachers[0]['room']; ?></td>
		</tr>
	</table>
	<br />
	<div class="actions">
		<?php echo Html::anchor('admin/subject/add_student_subject/'.$teachers[0]['id'], 'Add New Student', array('class' => 'btn btn-success')); ?>
	</div>
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
			<th>Action</th>
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
			<td><?php echo Html::anchor('admin/subject/delete_subject/'.$studentlists['ssid'], '', array('Onclick' => "return confirm('Are you sure?')", 'class'=>'btn btn-danger glyphicon glyphicon-remove-circle btn-xs', 'title'=>'Remove from this subject')); ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No studentlists.</p>

<?php endif; ?>
<br />
<br />
