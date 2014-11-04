<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/subject', 'Subject'); ?></li>
  <li><?php echo Html::anchor('admin/subject/student_list/'.$subject[0]['sid'], 'List of Students'); ?></li>
  <li class="active">Add Student Subjects</li>
</ol>
<?php echo Form::open(); ?>
<h2>Add Student Subjects</h2>
<?php 
	if ($subject) {
		echo "<input type='hidden' name='subj_id' value='".$subject[0]['id']."'>";
		echo "<table>
				<tr>
					<td>".Html::img('uploads/'.$subject[0]['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px"))."</td>
				</tr>
				<tr>
					<td>Name: </td>
					<td>".ucwords($subject[0]['fname']) ." ". ucwords($subject[0]['mname']) .". ". ucwords($subject[0]['lname']) ."</td>
				</tr>
				<tr>
					<td>subject Code: </td>
					<td>".$subject[0]['subj_code']."</td>
				</tr>
				<tr>
					<td>subject Description: </td>
					<td>".$subject[0]['subj_desc']."</td>
				</tr>
				<tr>
					<td>Schedule: </td>
					<td>".$subject[0]['schedule']."</td>
				</tr>
				<tr>
					<td>Time: </td>
					<td>".$subject[0]['time']."</td>
				</tr>
				<tr>
					<td>Room: </td>
					<td>".$subject[0]['room']."</td>
				</tr>
			</tabe>";
	}
 ?>
	<?php if ($students): ?>
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
			<thead>
				<tr>
					<th>Action</th>
					<th>Picture</th>
					<th>Name</th>
					<th>Course</th>
					<th>Year</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($students as $value): ?><tr>
				<td><?php echo Form::checkbox('stud_id[]', $value['uid'], array('id'=>'stud_id'));?></td>
				<td><?php echo Html::img('uploads/'.$value['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
				<td><?php echo ucwords($value['fname']) ." ". ucwords($value['mname']) ." ". ucwords($value['lname']); ?></td>
				<td><?php echo $value['course_name']; ?></td>
				<td><?php echo $value['year']." Year"; ?></td>
				<td><?php echo $value['email']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<br />
		<br />
		<div class="actions">
					<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
		<?php echo Form::close(); ?>
	<?php else: ?>
		<p>No Users.</p>
	<?php endif; ?>