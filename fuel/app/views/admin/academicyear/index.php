<ol class='breadcrumb'>
	<li class='active'>Academic Year</li>
</ol>
<h2>List of Academic Year</h2>
<br>
<?php if ($years): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Academic Year</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($years as $year): ?>		<tr>
			<td><?php echo $year->year; ?></td>
			<td>
				<?php echo Html::anchor('admin/academicyear/view/'.$year->id, '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View')); ?>
				<?php echo Html::anchor('admin/academicyear/edit/'.$year->id, '', array('class'=>'glyphicon glyphicon-wrench btn btn-warning btn-xs', 'title'=>'Edit')); ?>
				<?php echo Html::anchor('admin/academicyear/delete/'.$year->id, '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'glyphicon glyphicon-trash btn btn-danger btn-xs', 'title'=>'Delete')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Year.</p>

<?php endif; ?><p>
	<br />
	<br />
	<?php echo Html::anchor('admin/academicyear/create', 'Add Academic Year', array('class' => 'btn btn-success')); ?>

</p>
