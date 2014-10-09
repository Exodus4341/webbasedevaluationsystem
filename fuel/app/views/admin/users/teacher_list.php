<h2>Listing Teacher</h2>
<br>

<?php if ($users): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
	<thead>
		<tr>
			<th>Picture</th>
			<th>Username</th>
			<th>Name</th>
			<th>Department</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $user): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$user['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo ucwords($user['fname']).' '.ucwords($user['mname']).' '.ucwords($user['lname']); ?></td>
			<td><?php echo $user['dept_name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td>
				<?php echo Html::anchor('admin/users/view/'.$user['uid'], '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
				<?php echo Html::anchor('admin/users/edit/'.$user['uid'], '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
				<?php echo Html::anchor('admin/users/status/'.$user['uid'], '', array('class'=>'icon icon-remove', 'title'=>'Deactivate')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?>
<p>
	<br />
	<br />
	<?php echo Html::anchor('admin/users/', 'Admin List'); ?> |
	<?php echo Html::anchor('admin/users/student_list', 'Student List'); ?>
	<br />
	<br />
	<?php echo Html::anchor('admin/users/create', 'New Admin User', array('class' => 'btn btn-success')); ?>
	<?php echo Html::anchor('admin/users/teacher', 'New Teacher', array('class' => 'btn btn-success')); ?>
	<?php echo Html::anchor('admin/users/student', 'New Student', array('class' => 'btn btn-success')); ?>
	</p>