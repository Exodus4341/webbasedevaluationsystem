<ol class="breadcrumb">
  <li class="active">List of Admin</li>
</ol>
<h2>List of Admin</h2>
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
				<?php echo Html::anchor('admin/users/view/'.$user->id, '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View')); ?>
				<?php echo Html::anchor('admin/users/edit_admin/'.$user->id, '', array('class'=>'glyphicon glyphicon-wrench btn btn-warning btn-xs', 'title'=>'Edit')); ?>
				<?php echo Html::anchor('admin/users/delete/'.$user->id, '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'glyphicon glyphicon-trash btn btn-danger btn-xs', 'title'=>'Delete')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?>