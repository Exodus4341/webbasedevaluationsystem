<h2>Listing Users</h2>
<br>
<?php if ($users): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $user): ?>		<tr>
			<td><?php echo $user->username; ?></td>
			<td><?php echo $user->email; ?></td>
			<td>	
				<?php echo Html::anchor('admin/users/view/'.$user->id, '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
				<?php echo Html::anchor('admin/users/edit/'.$user->id, '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
				<?php echo Html::anchor('admin/users/delete/'.$user->id, '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'icon icon-trash', 'title'=>'Delete')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<br />
	<br />
	<?php echo Html::anchor('admin/users/student_list', 'Student List'); ?> |
	<?php echo Html::anchor('admin/users/teacher_list', 'Teacher List'); ?>
	<br />
	<br />
	<?php echo Html::anchor('admin/users/create', 'New Admin User', array('class' => 'btn btn-success')); ?>
	<?php echo Html::anchor('admin/users/teacher', 'New Teacher', array('class' => 'btn btn-success')); ?>
	<?php echo Html::anchor('admin/users/student', 'New Student', array('class' => 'btn btn-success')); ?>
	<br />
	<br />
	<?php echo Html::anchor('admin/users/deactivate', 'Deactivated Students', array('class' => 'btn btn-success')); ?>
	<?php echo Html::anchor('admin/users/deactivate_teacher', 'Deactivated Teachers', array('class' => 'btn btn-success')); ?>
</p>


	
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>