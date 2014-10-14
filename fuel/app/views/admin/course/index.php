<h2>Lisf of Courses</h2>
<br>
<?php if ($courses): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Course name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($courses as $course): ?>		<tr>

			<td><?php echo $course->course_name; ?></td>
			<td>
				<?php echo Html::anchor('admin/course/view/'.$course->id, '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View')); ?>
				<?php echo Html::anchor('admin/course/edit/'.$course->id, '', array('class'=>'glyphicon glyphicon-wrench btn btn-warning btn-xs', 'title'=>'Edit')); ?>
				<?php echo Html::anchor('admin/course/delete/'.$course->id, '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'glyphicon glyphicon-trash btn btn-danger btn-xs', 'title'=>'Delete')); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Courses.</p>

<?php endif; ?><p>
	<br />
	<br />
	<?php echo Html::anchor('admin/course/create', 'Add new Course', array('class' => 'btn btn-success')); ?>

</p>
