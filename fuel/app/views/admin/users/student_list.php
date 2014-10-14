<h2>Lisf of
 Student</h2>
<br>

<?php if ($users): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Picture</th>
			<th>Username</th>
			<th>Name</th>
			<th>Course</th>
			<th>Year</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $user): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$user['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo ucwords($user['fname']).' '.ucwords($user['mname']).' '.ucwords($user['lname']); ?></td>
			<td><?php echo $user['course_name']; ?></td>
			<td><?php echo $user['year']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td>
				<?php echo Html::anchor('admin/users/view/'.$user['uid'], '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View')); ?>
				<?php echo Html::anchor('admin/users/edit/'.$user['uid'], '', array('class'=>'glyphicon glyphicon-wrench btn btn-warning btn-xs', 'title'=>'Edit')); ?>
				<?php echo Html::anchor('admin/users/status/'.$user['uid'], '', array('class'=>'glyphicon glyphicon-trash btn btn-danger btn-xs', 'title'=>'Deactivate')); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No.Students.</p>

<?php endif; ?>