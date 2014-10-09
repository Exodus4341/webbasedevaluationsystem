<h2>Listing Student</h2>
<br>

<?php if ($deactivate): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example" width="100%">
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
<?php foreach ($deactivate as $deactivated): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$deactivated['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo $deactivated['username']; ?></td>
			<td><?php echo ucwords($deactivated['fname']).' '.ucwords($deactivated['mname']).' '.ucwords($deactivated['lname']); ?></td>
			<td><?php echo $deactivated['course_name']; ?></td>
			<td><?php echo $deactivated['year']; ?></td>
			<td><?php echo $deactivated['email']; ?></td>
			<td>
				<?php echo Html::anchor('admin/users/view/'.$deactivated['uid'], '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
				<?php echo Html::anchor('admin/users/edit/'.$deactivated['uid'], '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
				<?php echo Html::anchor('admin/users/activate/'.$deactivated['uid'], '', array('class'=>'icon icon-ok', 'title'=>'Activate')); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Deactivated Students</p>

<?php endif; ?><p>