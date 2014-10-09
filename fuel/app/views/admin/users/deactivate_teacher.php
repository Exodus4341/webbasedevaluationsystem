<h2>Listing Teacher</h2>
<br>

<?php if ($deactivate_teacher): ?>
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
<?php foreach ($deactivate_teacher as $deactivate_teachers): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$deactivate_teachers['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo $deactivate_teachers['username']; ?></td>
			<td><?php echo ucwords($deactivate_teachers['fname']).' '.ucwords($deactivate_teachers['mname']).' '.ucwords($deactivate_teachers['lname']); ?></td>
			<td><?php echo $deactivate_teachers['dept_name']; ?></td>
			<td><?php echo $deactivate_teachers['email']; ?></td>
			<td>
				<?php echo Html::anchor('admin/users/view/'.$deactivate_teachers['uid'], '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
				<?php echo Html::anchor('admin/users/edit/'.$deactivate_teachers['uid'], '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
				<?php echo Html::anchor('admin/users/activate/'.$deactivate_teachers['uid'], '', array('class'=>'icon icon-ok', 'title'=>'Deactivate')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Deactivated Teachers</p>

<?php endif; ?>