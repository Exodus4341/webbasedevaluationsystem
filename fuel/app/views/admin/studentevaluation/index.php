<h2>List of Teachers</h2>
<br>
<?php if ($teacher): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Picture</th>
			<th>Name</th>
			<th>Department</th>
			<th>Email</th>
			<th><center>Action</center></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($teacher as $teachers): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$teachers['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo ucwords($teachers['fname']).' '.ucwords($teachers['mname']).' '.ucwords($teachers['lname']); ?></td>
			<td><?php echo $teachers['dept_name']; ?></td>
			<td><?php echo $teachers['email']; ?></td>
			<td>
			<center><?php echo Html::anchor('admin/studentevaluation/view_subjects/'.$teachers['uid'], '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View Subjects')); ?></center>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>
<?php else: ?>
<p>No studentevaluations.</p>

<?php endif; ?>